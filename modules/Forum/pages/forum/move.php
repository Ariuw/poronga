<?php 
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *
 *  License: MIT
 *
 *  Move a topic
 */

define('PAGE', 'forum');
$page_title = $forum_language->get('forum', 'move_topic');
require_once(ROOT_PATH . '/core/templates/frontend_init.php');

require_once(ROOT_PATH . '/modules/Forum/classes/Forum.php');
$forum = new Forum();
 
if(!isset($_GET["tid"]) || !is_numeric($_GET["tid"])){
	Redirect::to(URL::build('/forum/error/', 'error=not_exist'));
	die();
} else {
	$topic_id = $_GET["tid"];
	$topic = $queries->getWhere('topics', array('id', '=', $topic_id));
	if(!count($topic)){
		Redirect::to(URL::build('/forum/error/', 'error=not_exist'));
		die();
	}
	$forum_id = $topic[0]->forum_id;
	$topic = $topic[0];
}

if($forum->canModerateForum($user->data()->group_id, $forum_id, $user->data()->secondary_groups)){
	if(Input::exists()) {
		if(Token::check(Input::get('token'))) {
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'forum' => array(
					'required' => true
				)
			));
			
			// Ensure forum we're moving to exists
			$forum_moving_to = $queries->getWhere('forums', array('id', '=', Input::get('forum')));
			if(!count($forum_moving_to)){
				Redirect::to(URL::build('/forum'));
				die();
			}
			
			$posts_to_move = $queries->getWhere('posts', array('topic_id', '=', $topic_id));
			if($validation->passed()){
				try {
					$queries->update('topics', $topic->id, array(
						'forum_id' => Input::get('forum')
					));
					foreach($posts_to_move as $post_to_move){
						$queries->update('posts', $post_to_move->id, array(
							'forum_id' => Input::get('forum')
						));
					}

					//TODO: Topic name & and Forums name
					Log::getInstance()->log(Log::Action('forums/move'), Output::getClean($topic_id).' => '. Output::getClean(Input::get('forum')));

					// Update latest posts in categories
					$forum->updateForumLatestPosts();
					$forum->updateTopicLatestPosts();

					Redirect::to(URL::build('/forum/topic/' . $topic_id));
					die();
				} catch(Exception $e){
					die($e->getMessage());
				}
			} else {
				echo 'Error processing that action. <a href="' . URL::build('/forum') . '">Forum index</a>';
				die();
			}
		}
	}
} else {
	Redirect::to(URL::build("/forum"));
	die();
}

// Generate navbar and footer
require(ROOT_PATH . '/core/templates/navbar.php');
require(ROOT_PATH . '/core/templates/footer.php');

// Get a list of all forums
$forums = $queries->orderWhere('forums', 'parent <> 0', 'forum_order', 'ASC');

// Assign Smarty variables
$smarty->assign(array(
	'MOVE_TOPIC' => $forum_language->get('forum', 'move_topic'),
	'MOVE_TO' => $forum_language->get('forum', 'move_topic_to'),
	'TOKEN' => Token::get(),
	'SUBMIT' => $language->get('general', 'submit'),
	'CANCEL' => $language->get('general', 'cancel'),
	'CONFIRM_CANCEL' => $language->get('general', 'confirm_cancel'),
	'CANCEL_LINK' => URL::build('/forum/topic/' . $topic->id),
	'FORUMS' => $forums
));

// Load modules + template
Module::loadPage($user, $pages, $cache, $smarty, array($navigation, $cc_nav, $mod_nav), $widgets);

$page_load = microtime(true) - $start;
define('PAGE_LOAD_TIME', str_replace('{x}', round($page_load, 3), $language->get('general', 'page_loaded_in')));

$template->onPageLoad();

require(ROOT_PATH . '/core/templates/navbar.php');
require(ROOT_PATH . '/core/templates/footer.php');

// Display template
$template->displayTemplate('forum/move.tpl', $smarty);