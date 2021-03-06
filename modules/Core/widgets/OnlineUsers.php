<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *
 *  License: MIT
 *
 *  Online users widget
 */
class OnlineUsersWidget extends WidgetBase {
	private $_smarty, $_cache, $_language;

    public function __construct($pages = array(), $cache, $smarty, $language){
    	$this->_smarty = $smarty;
    	$this->_cache = $cache;
    	$this->_language = $language;

        parent::__construct($pages);

        // Get order
        $order = DB::getInstance()->query('SELECT `order` FROM nl2_widgets WHERE `name` = ?', array('Online Users'))->first();

        // Set widget variables
        $this->_module = 'Core';
        $this->_name = 'Online Users';
        $this->_location = 'right';
        $this->_description = 'Displays a list of online users on your website.';
        $this->_settings = ROOT_PATH . '/modules/Core/includes/admin_widgets/online_users.php';
        $this->_order = $order->order;
    }

    public function initialise(){
	    $this->_cache->setCache('online_members');

	    if($this->_cache->isCached('users'))
		    $online = $this->_cache->retrieve('users');
	    else {
		    if($this->_cache->isCached('include_staff_in_users'))
			    $include_staff = $this->_cache->retrieve('include_staff_in_users');
		    else {
			    $include_staff = 0;
			    $this->_cache->store('include_staff_in_users', 0);
		    }

		    $online = DB::getInstance()->query('SELECT id, username, nickname FROM nl2_users WHERE last_online > ? AND group_id IN (SELECT id FROM nl2_groups WHERE staff = ?)', array(strtotime('-5 minutes'), $include_staff))->results();
		    $this->_cache->store('users', $online, 120);
	    }

	    // Generate HTML code for widget
	    if(count($online)){
		    $user = new User();

		    $users = array();

		    foreach($online as $item)
			    $users[] = array(
				    'profile' => URL::build('/profile/' . Output::getClean($item->username)),
				    'style' => $user->getGroupClass($item->id),
				    'username' => Output::getClean($item->username),
				    'nickname' => Output::getClean($item->nickname),
				    'avatar' => $user->getAvatar($item->id)
			    );

		    $this->_smarty->assign(array(
			    'ONLINE_USERS' => $this->_language['title'],
			    'ONLINE_USERS_LIST' => $users
		    ));

	    } else
		    $this->_smarty->assign(array(
			    'ONLINE_USERS' => $this->_language['title'],
			    'NO_USERS_ONLINE' => $this->_language['no_online_users']
		    ));

	    $this->_content = $this->_smarty->fetch('widgets/online_users.tpl');
    }
}