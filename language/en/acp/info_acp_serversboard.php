<?php

/**
*
* @package phpBB Extension - Servers Board
* @copyright (c) 2016 Token07
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'TOKEN07_SERVERSBOARD_ACP_SERVERSBOARD'	=> 'Servers Board',
	'TOKEN07_SERVERSBOARD_ACP_MANAGE'		=> 'Manage Servers',
	'TOKEN07_SERVERSBOARD_ACP_ADD'			=> 'Add Server',
));
