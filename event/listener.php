<?php
/**
*
* @package phpBB Extension - Cookie Settings
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\cookiesettings\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var phpbb\language\language */
	protected $language;

	/**
	* Constructor
	*
	* @param \phpbb\config\config				$config
	* @param \phpbb\template\template			$template
	* @param \phpbb\config\config_text			$config_text
	* @param phpbb\language\language			$language
	*
	*/
	public function __construct(
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		\phpbb\config\db_text $config_text,
		\phpbb\language\language $language
	)
	{
		$this->config 				= $config;
		$this->template 			= $template;
		$this->config_text 			= $config_text;
		$this->language				= $language;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after'			=> 'page_header_after',
			'core.acp_board_config_edit_add'	=> 'acp_board_config_edit_add',
		);
	}

	public function page_header_after($event)
	{
		$this->template->assign_vars(array(
			'S_COOKIE_NOTICE'				=> false,
			'S_COOKIE_EXT_NOTICE'			=> !empty($this->config['cookie_notice']),
			'COOKIE_PALETTE_BACKGROUND'		=> (isset($this->config['cookie_palette_background'])) ? $this->config['cookie_palette_background'] : '',
			'COOKIE_BUTTON_BACKGROUND'		=> (isset($this->config['cookie_button_background'])) ? $this->config['cookie_button_background'] : '',
			'COOKIE_MESSAGE'				=> $this->config['cookie_message'],
			'COOKIE_DISMISS'				=> $this->config['cookie_dismiss'],
			'S_COOKIE_USE_LINK'				=> $this->config['cookie_use_link'],
			'COOKIE_CONSENT_INFO'			=> $this->config['cookie_consent_info'],
			'COOKIE_CONSENT_HREF'			=> $this->config['cookie_consent_href'],
		));
	}

	public function acp_board_config_edit_add($event)
	{
		$this->language->add_lang('cookie_settings_acp', 'dmzx/cookiesettings');

		$this->inject_configs($event, array(
			'mode'		=> 'cookie',
			'position'	=> array('after' => 'cookie_notice'),
			'configs'	=> array(
				'cookie_palette_background' => array(
					'lang' 		=> 'ACP_COOKIE_PALETTE_BACKGROUND',
					'type'		=> 'custom',
					'function'	=> array($this, 'cookie_colour'),
					'explain'	=> true,
				),
				'cookie_button_background' => array(
					'lang' 		=> 'ACP_COOKIE_BUTTON_BACKGROUND',
					'type'		=> 'custom',
					'function'	=> array($this, 'cookie_colour'),
					'explain'	=> true,
				),
				'cookie_message' => array(
					'lang' 		=> 'ACP_COOKIE_MESSAGE',
					'validate' 	=> 'text',
					'type' 		=> 'text:100:120',
					'explain'	=> true,
				),
				'cookie_dismiss' => array(
					'lang' 		=> 'ACP_COOKIE_DISMISS',
					'validate' 	=> 'text',
					'type' 		=> 'text:10:20',
					'explain'	=> true,
				),
				'cookie_use_link' => array(
					'lang' 		=> 'ACP_COOKIE_USE_LINK',
					'type'		=> 'radio:yes_no',
					'explain'	=> true,
				),
				'cookie_consent_info' => array(
					'lang' 		=> 'ACP_COOKIE_CONSENT_INFO',
					'validate' 	=> 'text',
					'type' 		=> 'text:10:20',
					'explain'	=> true,
				),
				'cookie_consent_href' => array(
					'lang' 		=> 'ACP_COOKIE_CONSENT_HREF',
					'validate' 	=> 'string',
					'type' 		=> 'url:40:255',
					'explain'	=> true,
				),
			),
		));
	}

	protected function inject_configs($event, $options)
	{
		if ($event['mode'] == $options['mode'])
		{
			$display_vars = $event['display_vars'];
			$display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $options['configs'], $options['position']);
			$event['display_vars'] = array('title' => $display_vars['title'], 'vars' => $display_vars['vars']);
		}
	}

	function cookie_colour($value, $key)
	{
		return '<input class="text post color {required:false,caps:false}" name="config[' . $key . ']" type="text" id="' . $key . '" value="' . $value . '" size="6" maxlength="6" />';
	}
}
