<?php

/**
 * Imperial Ldap Integrator
 * Copyright © 2014 Dario Magliocchetti, All Rights Reserved
 * Website: http://dario-ml.com
 **/

// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

function optanon_info()
{
	return array(
		"name" => "Optional Anonymous Posting",
		"description" => "Allows users to optionally hide",
		"website" => "http://www.dario-ml.com/",
		"author" => "Dario Magliocchetti",
		"version" => "0.1",
		"compatibility"	=> "18*"
	);
}

$plugins->add_hook("newthread_do_newthread_end", "optanon_new_thread");
$plugins->add_hook("newreply_do_newreply_end", "optanon_new_post");
$plugins->add_hook("postbit", "optanon_postbit");
$plugins->add_hook("postbit_pm", "optanon_postbit");
$plugins->add_hook("postbit_prev", "optanon_postbit");
$plugins->add_hook("postbit_announcement", "optanon_postbit");
$plugins->add_hook("newreply_end", "optanon_hide_from_quotes");


function optanon_install ()
{
	global $db;
	$db->write_query("ALTER TABLE `".TABLE_PREFIX."threads` ADD `optanon_posted` TINYINT(1) NOT NULL DEFAULT '0'");
	$db->write_query("ALTER TABLE `".TABLE_PREFIX."posts` ADD `optanon_posted` TINYINT(1) NOT NULL DEFAULT '0'");
}

function optanon_uninstall ()
{
	global $db;	
	$db->write_query("ALTER TABLE `".TABLE_PREFIX."threads` DROP `optanon_posted`");
	$db->write_query("ALTER TABLE `".TABLE_PREFIX."posts` DROP `optanon_posted`");

}

function optanon_is_installed() 
{
	global $db;
	return $db->field_exists("optanon_posted", "posts");
}

function optanon_activate ()
{
	global $db;
	require MYBB_ROOT.'/inc/adminfunctions_templates.php';
	find_replace_templatesets(
		"newthread",
		'#'.preg_quote('{$loginbox}').'#',
		'{$loginbox}<tr><td class="trow2" width="20%"><strong>Hide Username?</strong></td><td class="trow2"><select name="optanon"><option value="n">No</option><option value="y">Yes</option></select></td></tr>'
	);
	find_replace_templatesets(
		"newreply",
		'#'.preg_quote('{$loginbox}').'#',
		'{$loginbox}<tr><td class="trow2" width="20%"><strong>Hide Username?</strong></td><td class="trow2"><select name="optanon"><option value="n">No</option><option value="y">Yes</option></select></td></tr>'
	);
	find_replace_templatesets(
		"showthread_quickreply",
		'#'.preg_quote('{$closeoption}').'#',
		'{$closeoption}<br /><label><input type="checkbox" class="checkbox" name="optanon" />&nbsp;<strong>Hide Username</strong></label>'
	);

}

function optanon_deactivate ()
{
	global $db;
	require MYBB_ROOT.'/inc/adminfunctions_templates.php';
	find_replace_templatesets(
		"newthread",
		'#'.preg_quote('<tr><td class="trow2" width="20%"><strong>Hide Username?</strong></td><td class="trow2"><select name="optanon"><option value="n">No</option><option value="y">Yes</option></select></td></tr>').'#',
		''
	);	
	find_replace_templatesets(
		"newreply",
		'#'.preg_quote('<tr><td class="trow2" width="20%"><strong>Hide Username?</strong></td><td class="trow2"><select name="optanon"><option value="n">No</option><option value="y">Yes</option></select></td></tr>').'#',
		''
	);	
	find_replace_templatesets(
		"showthread_quickreply",
		'#'.preg_quote('<br /><label><input type="checkbox" class="checkbox" name="optanon" />&nbsp;<strong>Hide Username</strong></label>').'#',
		''
	);
}


function optanon_new_thread()
{
	global $thread_info, $db, $mybb;

	$optanon = ($mybb->input['optanon'] == 'y') ? '1' : '0';

	if ($mybb->input['optanon'] == 'y' || $mybb->input['optanon'] == 'on') {
		$db->update_query('threads', array('optanon_posted' => 1, 'uid' => 0, 'username' => 'Anonymoose', 'lastposteruid' => 0, 'lastposter' => "Anonymoose"), "`tid`='" . $thread_info['tid'] . "'");
		$db->update_query('posts', array('optanon_posted' => 1), "`pid`='" . $thread_info['pid'] . "'");
	}
}


function optanon_new_post()
{
	global $postinfo, $db, $mybb, $post;

	// let's undo the effects of update_thread_data($tid)
	$mythread = get_thread($post['tid']);
	if ($mythread['optanon_posted'] == '1') {
		$db->update_query('threads', array('uid' => 0, 'username' => 'Anonymoose'), "`tid`='" . $mythread['tid'] . "'");
	}

	if ($mybb->input['optanon'] == 'y' || $mybb->input['optanon'] == 'on') {
		$db->update_query('posts', array('optanon_posted' => 1), "`pid`='" . $postinfo['pid'] . "'");
		$db->update_query('threads', array('lastposteruid' => 0, 'lastposter' => "Anonymoose"), "`tid`='" . $post['tid'] . "'");
	}
}

function optanon_postbit($post)
{
	if ($post['optanon_posted'] == 1) {
		$post['uid'] = 0;
		$post['username'] = "Anonymoose";
		$post['avatar'] = "";
		$post['useravatar'] = '<img src="http://dollarstorecrafts.com/wp-content/uploads/2011/09/moose-costume.jpg" alt="" width="70" height="70">';
		$post['avatardimensions'] = "";
		$post['avatartype'] = "";
		$post['email'] = "";
		$post['postnum'] = "";
		$post['usergroup'] = "";
		$post['additionalgroups'] = "";
		$post['displaygroup'] = "";
		$post['usertitle'] = "This user has chosen to post anonymousely";
		$post['signature'] = "";
		$post['username_formatted'] = "Anonymoose";
		$post['profilelink'] = "Anonymoose";
		$post['onlinestatus'] = "";
		$post['userstars'] = "";
		$post['user_details'] = "";
		$post['userreputation'] = "";
		$post['replink'] = "";
		$post['author'] = "0";
		$post['button_rep'] = "";
		$post['button_reply_pm'] = "";
		$post['button_replyall_pm'] = "";
		$post['button_forward_pm'] = "";
		$post['button_email'] = "";
		$post['button_pm'] = "";
		$post['button_find'] = "";
	}
	return $post;
}


function optanon_hide_from_quotes() {
	global $message;
	$message = preg_replace('#'.preg_quote("[quote='").'([a-zA-Z0-9]+?)'.preg_quote("' ").'#', "[", $message);
}

?>