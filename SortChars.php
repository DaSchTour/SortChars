<?php
/** SortChars MediaWiki Extension
 * Type: parser
*
* @author DaSch <dasch@daschmedia.de>
* @version 0.1
* @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
**/

/**
 * Protect against register_globals vulnerabilities.
* This line must be present before any global variable is referenced.
**/
if(!defined('MEDIAWIKI')){
	echo("This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die(-1);
}

/**
 * Identify the extension, version, author, etc
 **/
$wgExtensionCredits['parserhook'][] = array(
		'path'          =>      __FILE__,
		'name'          =>      'SortChars',
		'version'       =>      '0.1',
		'author'        =>      '[http://www.daschmedia.de DaSch]',
		'url'           =>      'http://www.mediawiki.org/wiki/Extension:SortChars',
		'descriptionmsg'=>      'sortchars-desc',
);


/**
 * Set up extension and messages
 **/
$dir = dirname(__FILE__) . '/';

$wgExtensionMessagesFiles['SortChars'] = $dir. 'SortChars.i18n.php';
$wgExtensionMessagesFiles['SortCharsMagic'] = $dir . 'SortChars.i18n.magic.php';

$wgAutoloadClasses['SortCharsHooks'] = $dir .'SortChars.hooks.php';
$wgHooks['ParserFirstCallInit'][] = 'SortCharsHooks::parser_setup';