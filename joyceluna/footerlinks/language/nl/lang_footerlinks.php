<?php
/**
*
* @package phpBB Extension - Footerlinks
* @copyright (c) 2016 joyceluna (https://phpbb-style-design.de)
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
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
	'ACL_A_FOOTERLINKS' 				=> 'kan instellingen van de footerlinks aanpassen',
	'ACP_FOOTERLINKS_TITLE'				=> 'Footerlinks',
	'ACP_FOOTERLINKS_CONFIG'			=> 'Configuratie',
	'ACP_FL_MOD'						=> 'Footerlinks',
	'FL_VIEW'							=> 'Overzicht Footerlinks',
	'FL_BVIEW'							=> 'Tonen',
	'FL_BCOMMENT'						=> 'Klik op een blok om te configureren. Een leeg veld wordt niet weergegeven. <br /> De blokken worden gecentreerd weergegeven.<br><br>externe linken vereisen de specificatie van http(s): //, Voorbeeld: https://www.voorbeeld.be',
	'FL_ENABLE'							=> 'Activeer Footerlinks',
	'FL_EXT_LINK'						=> 'Open links in aparte vensters',
	'FL_ENABLE_B1'						=> '▼ Blok 1:',
	'FL_ENABLE_B2'						=> '▼ Blok 2:',
	'FL_ENABLE_B3'						=> '▼ Blok 3:',
	'FL_CAT_TITEL'						=> 'Titel',
	'FL_URL'							=> 'URL',
	'FL_URL_TEXT'						=> 'Link Beschrijving',
	'FL_MORE_LINKS'						=> 'Voeg link toe',
	'LOG_FL_SAVE'						=> 'Instellingen van Footerlink Extensie gewijzigd' ,
	'FL_SAVED'							=> 'Instellingen opgeslagen',
));
