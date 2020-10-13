<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_optimizer.php 33906 2013-08-29 09:40:37Z jeffjzhang $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'optimizer_dbbackup_advice' => 'Không có sao lưu dữ liệu trong ba tháng, nên sao lưu dữ liệu ngay lập tức',
	'optimizer_dbbackup_lastback' => 'Sao lưu dữ liệu lần cuối tại ',
	'optimizer_dbbackup_clean_safe' => 'Không phát hiện tệp sao lưu cơ sở dữ liệu, không có vấn đề bảo mật',
	'optimizer_dbbackup_clean_delete' => 'Detected {filecount} backup files, (Directory: ./data/backup_xxx),<br>Please copy the backup to a safe location as soon as possible, and then delete these files!',//'检测到 {filecount} 个数据备份文件(目录: ./data/backup_xxx)，<br>请尽快手工复制到安全位置备份，然后删除这些文件',
	'optimizer_filecheck_advice' => 'You did not verified the file checksum more than 3 months, it is recommended to verify it right now.',//'三个月没有进行文件校验了,建议立即进行校验',
	'optimizer_filecheck_lastcheck' => 'Last file checksum',//'上次文件校验于',
	'optimizer_log_clean' => 'have {count} log records, can clean up for optimisation',//'有 {count} 个日志表可以清理优化',
	'optimizer_log_not_found' => 'No log records found to be clean up',//'未发现可清理的日志表',
	'optimizer_patch_have' => 'You have {patchnum} patches, please update as soon as possible',//'您有 {patchnum} 个，请尽快更新',
	'optimizer_patch_check_safe' => 'Detect security',//'检测安全',
	'optimizer_plugin_new_plugin' => 'You have {newversion} plugin updates available',//'您有 {newversion} 款应用有可用更新',
	'optimizer_plugin_no_upgrade' => 'Do not need to apply the update',//'不需要应用更新',
	'optimizer_post_need_split' => 'Post table and sub-tables have {count} rows to be optimized',//'帖子表及分表有 {count} 个需要优化',
	'optimizer_post_not_need' => 'Optimization is not required',//'不需要优化',
	'optimizer_seo_advice' => 'We recommend to improve the SEO settings',//'建议您完善SEO设置',
	'optimizer_seo_no_need' => 'Discovered SEO settings are perfect',//'发现已经完善了seo设置',
	'optimizer_setting_cache_index' => 'Cache Forum Home',//'缓存论坛首页',
	'optimizer_setting_cache_index_desc' => 'Enabling of this feature can reduce the server loading',//'开启此功能可减轻服务器负载',
	'optimizer_setting_cache_optimize_desc' => 'Set the cache time to 900 seconds',//'设置缓存时间为900秒',
	'optimizer_setting_cache_post' => 'Cache Posts',//'缓存帖子',
	'optimizer_setting_cache_post_desc' => 'Enabling of this feature can reduce the server loading',//'开启此功能可减轻服务器负载',
	'optimizer_setting_cache_post_optimize_desc' => 'Set the cache time to 900 seconds',//'设置缓存时间为900秒',
	'optimizer_setting_optimizeviews' => 'Optimize the updated thread views',//'优化更新主题浏览量',
	'optimizer_setting_optimizeviews_desc' => 'Enabling of this common feature can reduce the time of generating the Update Topic Page Views, and so reduce the server loading',//'开启此共功能可减轻更新主题浏览量时产生的服务器负载',
	'optimizer_setting_optimizeviews_optimize_desc' => 'Turn on this feature',//'开启此功能',
	'optimizer_setting_delayviewcount' => 'Attachment downloads delay update',//'附件下载量延迟更新',
	'optimizer_setting_delayviewcount_desc' => 'Delayed update of attachment views can significantly reduce the server loading when a large attachment required',//'延迟更新附件的浏览量，可明显降低访问量很大的站点的服务器负担',
	'optimizer_setting_delayviewcount_optimize_desc' => 'Turn on this feature',//'开启此功能',
	'optimizer_setting_preventrefresh' => 'Prevent recount of views when page refreshed',//'查看数开启防刷新',
	'optimizer_setting_preventrefresh_desc' => 'Anti-refresh feature can significantly reduce the server loading',//'开启防刷新，可明显降低服务器压力',
	'optimizer_setting_preventrefresh_optimize_desc' => 'Turn on this feature',//'开启此功能',
	'optimizer_setting_nocacheheaders' => 'Disable the browser caching',//'禁止浏览器缓冲',
	'optimizer_setting_nocacheheaders_desc' => 'Can be used to solve some people problems with a page refresh in some browsers. This feature significantly increases the server loading.',//'可用于解决极个别浏览器内容刷新不正常的问题，本功能会加重服务器负担',
	'optimizer_setting_nocacheheaders_optimize_desc' => 'Disable this feature',//'关闭此功能',
	'optimizer_setting_jspath' => 'JS file cache',//'JS 文件缓存',
	'optimizer_setting_jspath_desc' => 'If javascript cache directory enabled, then the will compress all the javascripts files and put it to this directory for increase the file read speed.',//'当脚本为缓存目录时，系统会将默认目录中的 *.js 文件进行压缩然后保存到缓存目录以提高读取速度',
	'optimizer_setting_jspath_optimize_desc' => 'Modify js path to the cache directory',//'修改js路径到缓存目录',
	'optimizer_setting_lazyload' => 'Image load delay',//'图片延时加载',
	'optimizer_setting_lazyload_desc' => 'Load an image only if it is visible in the browser window. This feature can significantly reduce the server loading.',//'页面中的图片在浏览器的当前窗口时再加载，可明显降低访问量很大的站点的服务器负担',
	'optimizer_setting_lazyload_optimize_desc' => 'Turn on this feature',//'开启此功能',
	'optimizer_setting_sessionclose' => 'Disable the session mechanism',//'关闭session机制',
	'optimizer_setting_sessionclose_desc' => 'Closing the session mechanism can significantly reduce the server loading. Recommended to use this feature if the number of online users is greater than 20000.<br>Note: If the users online and total users statistics are not calculated, the users statistics will be unavailable at the Forum home page.',//'关闭session机制以后，可明显降低站点的服务器负担，建议在线用户数超过2万时开启本功能<br>注意：游客数和用户的在线时长将不再进行统计，论坛首页和版块列表页面的在线用户列表功能将不可用',
	'optimizer_setting_sessionclose_optimize_desc' => 'Turn on this feature',//'开启此功能',
	'optimizer_setting_need_optimizer' => 'Have {count} settings can be optimized',//'有 {count} 个设置项可以优化',
	'optimizer_setting_no_need' => 'Setting items do not require of optimization',//'设置项无需优化',
	'optimizer_thread_need_optimizer' => 'Need to optimize your thread table',//'需要优化您的主题表了',
	'optimizer_thread_no_need' => 'No need to optimize',//'不需要优化',
	'optimizer_upgrade_need_optimizer' => 'There are new versions, Update to the latest version',//'有新版本，及时更新到最新版本',
	'optimizer_upgrade_no_need' => 'Is the latest version',//'已经是最新版',
	'optimizer_setting_rewriteguest' => 'Rewrite only for guests',//'Rewrite仅针对游客',
	'optimizer_setting_rewriteguest_desc' => 'If enable this feature, the URL Rewrite feature will be used only for guests and search engines. This feature will reduce the server loading.',//'开启此项，则 Rewrite功能只对游客和搜索引擎有效，可减轻服务器负担',
	'optimizer_setting_rewriteguest_optimize_desc' => 'Turn on this feature',//'开启此功能',
	'optimizer_inviteregister_tip' => 'Enable registration by invitation code, Set a list of restricted areas for fet invitation code. Suitable for local communities.',//'注册项中开启邀请注册后,设置不受邀请码限制的地方列表,适合地方社区设置',
	'optimizer_iniviteregister_normal' => 'Detected normal registration setting',//'检测设置正常',
	'optimizer_emailregister_normal' => 'Detected normal settings, please check the mailserver works ok',//'已设置该项,请查看是否配置邮件服务器',
	'optimizer_emailregister_tip' => 'This setting can enhance the user quality',//'此设置可以提升用户质量',
	'optimizer_pwlength_need' => 'Minimum password length is too low, it is unsafe!',//'密码最小长度过低，不安全',
	'optimizer_pwlength_no_need' => 'Detected after testing that the password length is set to normal',//'经检测密码长度设置正常',
	'optimizer_regmaildomain_need' => 'Need to optimize the blacklist',//'需要优化黑名单列表',
	'optimizer_regmaildomain_tip' => 'You can set restrictions for mail domains at registration to prevent a spam',//'可以设置邮箱域名限制阻止垃圾注册',
	'optimizer_ipregctrl_no_need' => 'Registration IP restriction list is set',//'已经设置了限时注册IP列表',
	'optimizer_ipregctrl_tip' => 'When you see a lot of malicious registrations frome some IP range, you can add this IP address or range to the IP black list',//'当有某些IP段在恶意注册时，可以将恶意的IP地址录入',
	'optimizer_newbiespan_no_need' => 'Newbie aprobation period has been set',//'已经设置了见习时间',
	'optimizer_newbiespan_need' => 'Aprobation period can be set for more secure',//'设置一下见习时间更安全',
	'optimizer_editperdel_no_need' => 'The setting "No edit after delete" has been set',//'已经设置了此设置项',
	'optimizer_editperdel_need' => 'Need to be optimized',//'需要优化此项',
	'optimizer_recyclebin_no_need' => 'Forum Recycle Bin have been enabled',//'版块都已经开启回收站了',
	'optimizer_recyclebin_need' => 'Forum Recycle Bin is NOT enabled<br>{forumdesc}',//'版块没有开启回收站<br>{forumdesc}',
	'optimizer_forumstatus_no_need' => 'No hidden forums or hidden blocks have access permissions set',//'无隐藏版块或者隐藏版块都已经设置了访问权限',
	'optimizer_forumstatus_need' => 'Hidden block have no access permissions set<br>{forumdesc}',//'隐藏版块还没有设置访问权限<br>{forumdesc}',
	'optimizer_usergroup9_no_need' => 'Limited user group membership is set to normal',//'限制会员用户组设置正常',
	'optimizer_usergroup9_need' => 'Please close these options "{desc}"',//'请关闭 "{desc}" 这些选项',
	'optimizer_usergroup4_need' => 'Please close these options "{desc}"',//'请关闭 "{desc}" 这些选项',
	'optimizer_usergroup5_need' => 'Please close these options "{desc}"',//'请关闭 "{desc}" 这些选项',
	'optimizer_usergroup6_need' => 'Please close these options "{desc}"',//'请关闭 "{desc}" 这些选项',
	'optimizer_usergroup_need_allowsendpm' => 'Allow to send PM',//'是否允许发短消息',
	'optimizer_usergroup_need_allowposturl' => 'Allow to publish external URL',//'是否允许发站外URL',
	'optimizer_usergroup_need_allowgroupposturl' => 'Whether to allow this group to publish external URL',//'群组是否允许发站外URL',
	'optimizer_usergroup_need_allowpost' => 'Allow New Threads',//'允许发新话题',
	'optimizer_usergroup_need_allowreply' => 'Allow Post Replies',//'允许发表回复',
	'optimizer_usergroup_need_allowdirectpost' => 'Allow direct posting',//'允许直接发帖',
	'optimizer_usergroup_need_allowgroupdirectpost' => 'Allow direct posting for groups',//'群组允许直接发帖',
	'optimizer_usergroup4_no_need' => 'R/O user group setting is normal',//'禁止发言用户组设置正常',
	'optimizer_usergroup5_no_need' => 'No-access user group setting is normal',//'禁止访问用户组设置正常',
	'optimizer_usergroup6_no_need' => 'Disabled IP user group setting is normal',//'禁止IP用户组设置正常',
	'optimizer_cloudsecurity_no_need' => 'Waterproof wall is turned on',//'防水墙已开启',
	'optimizer_cloudsecurity_need' => 'Waterproof wall can effectively prevent spam, improve a site content quality, reduce a management cost. It is highly recommended to install this application.',//'防水墙可以有效的防止垃圾帖,提升网站内容质量,降低管理成本，非常建议安装此应用',
	'optimizer_cloudsecurity_setting_need' => 'Waterproof wall settings need to be modified',//'防水墙设置被修改',
	'optimizer_attachexpire_need' => 'This setting can play an anti-hotlinking role',//'设置后可以起到防盗链的作用',
	'optimizer_attachexpire_no_need' => 'The setting is normal',//'已经设置了此项',
	'optimizer_attachrefcheck_need' => 'This setting can play an anti-hotlinking role',//'设置后可以起到防盗链的作用',
	'optimizer_attachrefcheck_no_need' => 'The setting is normal',//'已经设置了此项',
	'optimizer_loginpwcheck_need' => 'Weak password detection is disabled',//'弱密码登录检测未开启',
	'optimizer_loginpwcheck_no_need' => 'Weak password detection is enabled',//'弱密码登录检测已开启',
	'optimizer_loginoutofdate_need' => 'Abnormal login detection is disabled',//'异常登录检测未开启',
	'optimizer_loginoutofdate_no_need' => 'Abnormal login detection is enabled',//'异常登录检测已开启',
	'optimizer_postqqonly_need' => 'Bind QQ before posting is disabled',//'发帖需要绑定QQ号检测未开启',
	'optimizer_postqqonly_no_need' => 'Bind QQ before posting is enabled',//'发帖需要绑定QQ号检测已开启',
	'optimizer_aggid_need' => '"Administrator, Super Moderator, Moderator must have QQ bound" is disabled',//'“管理员，超级版主，版主”QQ登录检测未开启',
	'optimizer_aggid_no_need' => '"Administrator, Super Moderator, Moderator must have QQ bound" is enabled',//'“管理员，超级版主，版主”QQ登录检测已开启',
	'optimizer_eviluser_need' => 'Waterproof wall detected violated users, Please process ASAP',//'防水墙识别到违规用户，请及时处理',
	'optimizer_eviluser_no_need' => 'No violated users found',//'未发现违规用户',
	'optimizer_white_list_need' => 'You have set up a waterproof wall whitelist. Whitelist spamming users markers is yet not processed, please be careful.',//'您设置了防水墙白名单，白名单用户发垃圾贴不被处理，请慎重',
	'optimizer_white_list_no_need' => 'White list is not set',//'未设置白名单',
	'optimizer_security_daily_need' => 'Enabling the daily waterproof wall optimization can clear the traces of deleted posts',//'开启防水墙每日优化，可清除删帖后首页痕迹',
	'optimizer_white_list_no_need' => 'White list is not set',//'未设置白名单',
);
?>