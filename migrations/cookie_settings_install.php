<?php
/**
*
* @package phpBB Extension - Cookie Settings
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\cookiesettings\migrations;

class cookie_settings_install extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		global $user;

		return array(
			// Add configs
			array('config.add', array('cookie_palette_background', '0F538A')),
			array('config.add', array('cookie_button_background', 'E5E5E5')),
			array('config.add', array('cookie_message', $user->lang['COOKIE_CONSENT_MSG'])),
			array('config.add', array('cookie_dismiss', $user->lang['COOKIE_CONSENT_OK'])),
			array('config.add', array('cookie_use_link', 1)),
			array('config.add', array('cookie_consent_info', $user->lang['COOKIE_CONSENT_INFO'])),
			array('config.add', array('cookie_consent_href', $user->lang['COOKIE_CONSENT_HREF'])),
		);
	}
}
