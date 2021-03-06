<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *
 *  License: MIT
 *
 *  New topic page
 */

// Always define page name
define('PAGE', 'forum');
$page_title = $forum_language->get('forum', 'new_topic');
require_once(ROOT_PATH . '/core/templates/frontend_init.php');

// User must be logged in to proceed
if(!$user->isLoggedIn()){
	Redirect::to(URL::build('/forum'));
	die();
}

require_once(ROOT_PATH . '/modules/Forum/classes/Forum.php');
$forum = new Forum();
$mentionsParser = new MentionsParser();

require(ROOT_PATH . '/core/includes/markdown/tohtml/Markdown.inc.php'); // Markdown to HTML

if(!isset($_GET['fid']) || !is_numeric($_GET['fid'])){
	Redirect::to(URL::build('/forum/error/', 'error=not_exist'));
	die();
}

$fid = (int) $_GET['fid'];

// Get user group ID
$user_group = $user->data()->group_id;
$secondary_groups = $user->data()->secondary_groups;

// Does the forum exist, and can the user view it?
$list = $forum->forumExist($fid, $user_group, $secondary_groups);
if(!$list){
	Redirect::to(URL::build('/forum/error/', 'error=not_exist'));
	die();
}

// Can the user post a topic in this forum?
$can_reply = $forum->canPostTopic($fid, $user_group, $secondary_groups);
if(!$can_reply){
	Redirect::to(URL::build('/forum/view/' . $fid));
	die();
}

$forum_title = $forum->getForumTitle($fid);

// Deal with any inputted data
if(Input::exists()) {
	if(Token::check(Input::get('token'))){
		// Check post limits
		$last_post = $queries->orderWhere('posts', 'post_creator = ' . $user->data()->id, 'post_date', 'DESC LIMIT 1');
		if(count($last_post)){
			if($last_post[0]->created > strtotime("-30 seconds")){
				$spam_check = true;
			}
		}

		if(!isset($spam_check)){
			// Spam check passed
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'title' => array(
					'required' => true,
					'min' => 2,
					'max' => 64
				),
				'content' => array(
					'required' => true,
					'min' => 2,
					'max' => 50000
				)
			));
			if($validation->passed()){
				try {
					if(isset($_POST['topic_label']) && !empty($_POST['topic_label']) && is_numeric($_POST['topic_label'])){
                        $topic_label = $queries->getWhere('forums_topic_labels', array('id', '=', $_POST['topic_label']));
                        if(count($topic_label)){
                            $groups = explode(',', $topic_label[0]->gids);
                            if(in_array($user->data()->group_id, $groups))
                                $label = Input::get('topic_label');
                            else
                                $label = null;
                        } else
                            $label = null;
                    } else
                        $label = null;

					$queries->create("topics", array(
						'forum_id' => $fid,
						'topic_title' => Input::get('title'),
						'topic_creator' => $user->data()->id,
						'topic_last_user' => $user->data()->id,
						'topic_date' => date('U'),
						'topic_reply_date' => date('U'),
						'label' => $label
					));
					$topic_id = $queries->getLastId();

					// Parse markdown
					$cache->setCache('post_formatting');
					$formatting = $cache->retrieve('formatting');

					if($formatting == 'markdown'){
						$content = Michelf\Markdown::defaultTransform(Input::get('content'));
						$content = Output::getClean($content);
					} else $content = Output::getClean(Input::get('content'));

					$queries->create("posts", array(
						'forum_id' => $fid,
						'topic_id' => $topic_id,
						'post_creator' => $user->data()->id,
						'post_content' => $content,
						'post_date' => date('Y-m-d H:i:s'),
						'created' => date('U')
					));

					// Get last post ID
					$last_post_id = $queries->getLastId();
					$content = $mentionsParser->parse($user->data()->id, $content, $topic_id, $last_post_id, $forum_language->get('forum', 'user_tag'), $forum_language->get('forum', 'user_tag_info'));

					$queries->update("posts", $last_post_id, array(
						'post_content' => $content
					));

					$queries->update("forums", $fid, array(
						'last_post_date' => date('U'),
						'last_user_posted' => $user->data()->id,
						'last_topic_posted' => $topic_id
					));

					Log::getInstance()->log(Log::Action('forums/topic/create'), Output::getClean(Input::get('title')));

					// Execute hooks if necessary
                    $forum_events = $queries->getWhere('settings', array('name', '=', 'forum_new_topic_hooks'));
                    if(count($forum_events)){
                        $forum_events = $forum_events[0]->value;
                        $forum_events = json_decode($forum_events);
                        if(count($forum_events) && in_array($fid, $forum_events)){
                            HookHandler::executeEvent('newTopic', array(
                                'event' => 'newTopic',
                                'uuid' => Output::getClean($user->data()->uuid),
                                'username' => Output::getClean($user->data()->username),
                                'nickname' => Output::getClean($user->data()->nickname),
                                'content' => str_replace(array('{x}', '{y}'), array($forum_title, Output::getClean($user->data()->nickname)), $forum_language->get('forum', 'new_topic_text')),
                                'content_full' => strip_tags(Input::get('content')),
                                'avatar_url' => $user->getAvatar($user->data()->id, null, 128, true),
                                'title' => Input::get('title'),
                                'url' => Util::getSelfURL() . ltrim(URL::build('/forum/topic/' . $topic_id . '-' . $forum->titleToURL(Input::get('title'))), '/')
                            ));
                        }
                    }

					Session::flash('success_post', $forum_language->get('forum', 'post_successful'));

					Redirect::to(URL::build('/forum/topic/' . $topic_id . '-' . $forum->titleToURL(Input::get('title'))));
					die();

				} catch(Exception $e){
					die($e->getMessage());
				}
			} else {
				$error = array();
				foreach($validation->errors() as $item){
					if(strpos($item, 'is required') !== false){
						switch($item){
							case (strpos($item, 'title') !== false):
								$error[] = $forum_language->get('forum', 'title_required');
							break;
							case (strpos($item, 'content') !== false):
								$error[] = $forum_language->get('forum', 'content_required');
							break;
						}
					} else if(strpos($item, 'minimum') !== false){
						switch($item){
							case (strpos($item, 'title') !== false):
								$error[] = $forum_language->get('forum', 'title_min_2');
							break;
							case (strpos($item, 'content') !== false):
								$error[] = $forum_language->get('forum', 'content_min_2');
							break;
						}
					} else if(strpos($item, 'maximum') !== false){
						switch($item){
							case (strpos($item, 'title') !== false):
								$error[] = $forum_language->get('forum', 'title_max_64');
							break;
							case (strpos($item, 'content') !== false):
								$error[] = $forum_language->get('forum', 'content_max_50000');
							break;
						}
					}
				}
			}
		} else {
			$error = array(str_replace('{x}', (strtotime($last_post[0]->post_date) - strtotime("-30 seconds")), $forum_language->get('forum', 'spam_wait')));
		}
	} else {
		$error = array($language->get('general', 'invalid_token'));
	}
}

// Generate a token
$token = Token::get();

$template->addCSSFiles(array(
	(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/ckeditor/plugins/spoiler/css/spoiler.css' => array(),
	(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/emoji/css/emojione.min.css' => array(),
	(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/emoji/css/emojione.sprites.css' => array(),
	(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/emojionearea/css/emojionearea.min.css' => array(),
));

// Generate content for template
if(isset($error)){
	$smarty->assign('ERROR', $error);
}

$creating_topic_in = str_replace('{x}', Output::getPurified(htmlspecialchars_decode($forum_title)), $forum_language->get('forum', 'creating_topic_in_x'));
$smarty->assign('CREATING_TOPIC_IN', $creating_topic_in);

// Topic labels
$smarty->assign('LABELS_TEXT', $forum_language->get('forum', 'label'));
$labels = array();

$forum_labels = $queries->getWhere('forums_topic_labels', array('id', '<>', 0));
if(count($forum_labels)){
	$labels[] = array(
		'id' => 0,
		'html' => $forum_language->get('forum', 'no_label')
	);

	foreach($forum_labels as $label){
		$forum_ids = explode(',', $label->fids);

		if(in_array($fid, $forum_ids)){
			// Check permissions
			$groups = explode(',', $label->gids);
			if (!in_array($user->data()->group_id, $groups))
				continue;

			// Get label HTML
			$label_html = $queries->getWhere('forums_labels', array('id', '=', $label->label));
			if(!count($label_html)) continue;
			else $label_html = str_replace('{x}', Output::getClean($label->name), $label_html[0]->html);

			$labels[] = array(
				'id' => $label->id,
				'html' => $label_html
			);
		}
	}
}

// Smarty variables
$smarty->assign('LABELS', $labels);
$smarty->assign('TOPIC_TITLE', $forum_language->get('forum', 'topic_title'));
$smarty->assign('LABEL', $forum_language->get('forum', 'label'));
$smarty->assign('SUBMIT', $language->get('general', 'submit'));
$smarty->assign('CANCEL', $language->get('general', 'cancel'));
$smarty->assign('CLOSE', $language->get('general', 'close'));
$smarty->assign('CONFIRM_CANCEL', $language->get('general', 'confirm_cancel'));
$smarty->assign('TOKEN', '<input type="hidden" name="token" value="' . $token . '">');
$smarty->assign('FORUM_LINK', URL::build('/forum'));
$smarty->assign('CONTENT', Output::getPurified(Input::get('content')));

// Get post formatting type (HTML or Markdown)
$cache->setCache('post_formatting');
$formatting = $cache->retrieve('formatting');

if($formatting == 'markdown'){
	// Markdown
	$smarty->assign('MARKDOWN', true);
	$smarty->assign('MARKDOWN_HELP', $language->get('general', 'markdown_help'));

	$template->addJSFiles(array(
		(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/emoji/js/emojione.min.js' => array(),
		(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/emojionearea/js/emojionearea.min.js' => array()
	));

	$template->addJSScript('
	  $(document).ready(function() {
		var el = $("#markdown").emojioneArea({
			pickerPosition: "bottom"
		});
	  });
	');
} else {
	$template->addJSFiles(array(
		(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/emoji/js/emojione.min.js' => array(),
		(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/ckeditor/plugins/spoiler/js/spoiler.js' => array(),
		(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/ckeditor/ckeditor.js' => array(),
		(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/ckeditor/plugins/emojione/dialogs/emojione.json' => array(),
	));

	$template->addJSScript(Input::createEditor('reply'));
}

// Load modules + template
Module::loadPage($user, $pages, $cache, $smarty, array($navigation, $cc_nav, $mod_nav), $widgets);

$page_load = microtime(true) - $start;
define('PAGE_LOAD_TIME', str_replace('{x}', round($page_load, 3), $language->get('general', 'page_loaded_in')));

$template->onPageLoad();

require(ROOT_PATH . '/core/templates/navbar.php');
require(ROOT_PATH . '/core/templates/footer.php');

// Display template
$template->displayTemplate('forum/new_topic.tpl', $smarty);