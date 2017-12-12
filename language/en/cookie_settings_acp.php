<?php
/**
*
* @package phpBB Extension - Cookie Settings
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// ACP entries
	'ACP_COOKIE_PALETTE_BACKGROUND'				=> 'Set colour of background',
	'ACP_COOKIE_PALETTE_BACKGROUND_EXPLAIN'		=> 'Change colour of the background just by clicking on the value.',
	'ACP_COOKIE_BUTTON_BACKGROUND'				=> 'Set colour of button',
	'ACP_COOKIE_BUTTON_BACKGROUND_EXPLAIN'		=> 'Change colour of the button just by clicking on the value.',
	'ACP_COOKIE_MESSAGE'						=> 'Set message for cookie',
	'ACP_COOKIE_MESSAGE_EXPLAIN'				=> 'Change message text for cookie.',
	'ACP_COOKIE_DISMISS'						=> 'Set button text for cookie',
	'ACP_COOKIE_DISMISS_EXPLAIN'				=> 'Change button text for cookie.',
	'ACP_COOKIE_USE_LINK'						=> 'Use link in cookie',
	'ACP_COOKIE_USE_LINK_EXPLAIN'				=> 'Use "Learn more" link in cookie.',
	'ACP_COOKIE_CONSENT_INFO'					=> 'Set text for URL',
	'ACP_COOKIE_CONSENT_INFO_EXPLAIN'			=> 'Change text for url link.',
	'ACP_COOKIE_CONSENT_HREF'					=> 'Set URL link',
	'ACP_COOKIE_CONSENT_HREF_EXPLAIN'			=> 'Change URL link.',
));
