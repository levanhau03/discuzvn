<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_custom.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'custom_name' => 'โฆษณาแบบกำหนดเอง',
	'custom_desc' => 'Add custom adv code in templates or HTML file.<br /><br />
		<a href="javascript:;" onclick="prompt(\'请复制(CTRL+C)以下内容并添加到模板中，添加此广告位\', \'<!--{ad/custom_'.$_GET['customid'].'}-->\')" />内部调用</a>&nbsp;
		<a href="javascript:;" onclick="prompt(\'请复制(CTRL+C)以下内容并添加到 HTML 文件中，添加此广告位\', \'&lt;script type=\\\'text/javascript\\\' src=\\\''.$_G['siteurl'].'api.php?mod=ad&adid=custom_'.$_GET['customid'].'\\\'&gt;&lt;/script&gt;\')" />外部调用</a>',
	'custom_id_notfound' => 'Custom adv does not exist',
	'custom_codelink' => 'Internal js call',
	'custom_text' => 'Custom advertising',
);

?>