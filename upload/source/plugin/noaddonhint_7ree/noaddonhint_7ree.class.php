<?php
/*
    ID: noaddonhint_7ree
	[www.7ree.com] (C)2007-2012 7ree.com.
	This is NOT a freeware, use is subject to license terms
	Update: 14:09 2012/12/17
    Agreement: http://www.7ree.com/agreement.html
	More Plugins: http://addon.discuz.com/?@7ree
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}



class plugin_noaddonhint_7ree{

		function global_footerlink() {
			global $_G;
			$return = "";
			$vars_7ree = $_G['cache']['plugin']['noaddonhint_7ree'];
			if(empty($_G['cookie']['pluginnotice']) && $vars_7ree['agreement_7ree'] && $vars_7ree['onoff_7ree']){
				$_G['cookie']['pluginnotice'] = 1;
			}
			return $return;	
		}

}			

class plugin_noaddonhint_7ree_forum extends plugin_noaddonhint_7ree{}
class plugin_noaddonhint_7ree_home extends plugin_noaddonhint_7ree{}
class plugin_noaddonhint_7ree_group extends plugin_noaddonhint_7ree{}
class plugin_noaddonhint_7ree_portal extends plugin_noaddonhint_7ree{}
class plugin_noaddonhint_7ree_userapp extends plugin_noaddonhint_7ree{}
class plugin_noaddonhint_7ree_member extends plugin_noaddonhint_7ree{}
class plugin_noaddonhint_7ree_ranklist extends plugin_noaddonhint_7ree{}
class plugin_noaddonhint_7ree_plugin extends plugin_noaddonhint_7ree{}
?>

