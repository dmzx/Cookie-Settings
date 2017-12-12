<?php
/**
*
* @version $Id$
* deutsch von Scanialady - https://ladyscommunity.de
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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	// ACP entries
	'ACP_COOKIE_PALETTE_BACKGROUND'				=> 'Setze die Hintergrundfarbe',
	'ACP_COOKIE_PALETTE_BACKGROUND_EXPLAIN'		=> 'Ändere die Hintergrundfarbe, indem du einfach auf den Wert klickst.',
	'ACP_COOKIE_BUTTON_BACKGROUND'				=> 'Setze die Farbe des Buttons',
	'ACP_COOKIE_BUTTON_BACKGROUND_EXPLAIN'		=> 'Ändere die Buttonfarbe, indem du einfach auf den Wert klickst.',
	'ACP_COOKIE_MESSAGE'						=> 'Setze die Cookie-Nachricht',
	'ACP_COOKIE_MESSAGE_EXPLAIN'				=> 'Ändere den Nachrichtentext für die Cookie-Benachrichtung.',
	'ACP_COOKIE_DISMISS'						=> 'Setze den Buttontext für das Cookiebanner',
	'ACP_COOKIE_DISMISS_EXPLAIN'				=> 'Ändere den Buttontext für die Cookiebestätigung im Banner.',
	'ACP_COOKIE_USE_LINK'						=> 'Benutze Link in Cookiebanner',
	'ACP_COOKIE_USE_LINK_EXPLAIN'				=> 'Verwende „Mehr erfahren“-Link im Cookiebanner.',
	'ACP_COOKIE_CONSENT_INFO'					=> 'Setze den Text für die URL',
	'ACP_COOKIE_CONSENT_INFO_EXPLAIN'			=> 'Ändere den Text für den URL-Link.',
	'ACP_COOKIE_CONSENT_HREF'					=> 'Setze URL-Link',
	'ACP_COOKIE_CONSENT_HREF_EXPLAIN'			=> 'Ändere den URL-Link, beispielsweise zu einer landesspezifischen Seite.',
));
