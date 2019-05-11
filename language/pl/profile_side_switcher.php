<?php
/**
*
* profilesideswitcher [English]
*
* @package language profilesideswitcher
* @copyright (c) 2014 Татьяна5
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
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
	'PSS_LEFT'			=> 'Profil po lewej',
	'PSS_RIGHT'			=> 'Profil po prawej',
	'PSS_VIEW_LEFT'		=> 'Wyświetlaj profil po lewej stronie postu',
));
