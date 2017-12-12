<?php
/**
*
* @package phpBB Extension - Cookie Settings
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0] (https://github.com/phpBBTraducoes)
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
	'ACP_COOKIE_PALETTE_BACKGROUND'				=> 'Definir cor do plano de fundo.',
	'ACP_COOKIE_PALETTE_BACKGROUND_EXPLAIN'		=> 'Altere a cor do fundo apenas clicando no valor.',
	'ACP_COOKIE_BUTTON_BACKGROUND'				=> 'Definir cor do botão',
	'ACP_COOKIE_BUTTON_BACKGROUND_EXPLAIN'		=> 'Altere a cor do botão apenas clicando no valor.',
	'ACP_COOKIE_MESSAGE'						=> 'Definir mensagem para cookie',
	'ACP_COOKIE_MESSAGE_EXPLAIN'				=> 'Altere o texto da mensagem para o cookie.',
	'ACP_COOKIE_DISMISS'						=> 'Definir texto do botão para o cookie',
	'ACP_COOKIE_DISMISS_EXPLAIN'				=> 'Altere o texto do botão para o cookie.',
	'ACP_COOKIE_USE_LINK'						=> 'Use o link no cookie',
	'ACP_COOKIE_USE_LINK_EXPLAIN'				=> 'Usar o link "Saiba mais" no cookie.',
	'ACP_COOKIE_CONSENT_INFO'					=> 'Definir texto para URL',
	'ACP_COOKIE_CONSENT_INFO_EXPLAIN'			=> 'Altere o texto para o link URL.',
	'ACP_COOKIE_CONSENT_HREF'					=> 'Definir link URL',
	'ACP_COOKIE_CONSENT_HREF_EXPLAIN'			=> 'Altere o link do URL.',
));
