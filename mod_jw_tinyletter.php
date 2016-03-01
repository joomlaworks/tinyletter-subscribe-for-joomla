<?php
/**
 * @version     2.0
 * @package     TinyLetter Subscribe (module)
 * @author      JoomlaWorks - http://www.joomlaworks.net
 * @copyright   Copyright (c) 2006 - 2013 JoomlaWorks Ltd. All rights reserved.
 * @license     GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// JoomlaWorks reference parameters
$mod_name               = "mod_jw_tinyletter";
$mod_copyrights_start   = "\n\n<!-- JoomlaWorks \"TinyLetter Subscribe\" Module (v2.0) starts here -->\n";
$mod_copyrights_end     = "\n<!-- JoomlaWorks \"TinyLetter Subscribe\" Module (v2.0) ends here -->\n\n";

// Conventions
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

// API
$mainframe	= JFactory::getApplication();
$document 	= JFactory::getDocument();

// Assign paths
$sitePath 	= JPATH_SITE;
$siteUrl  	= substr(JURI::base(), 0, -1);

// Module parameters
$moduleclass_sfx 	= $params->get('moduleclass_sfx','');
$template 				= $params->get('template','Default');
$tlUsername				= $params->get('tlUsername','');
$tlShowPretext		= $params->get('tlShowPretext',1);
$tlPretext				= $params->get('tlPretext',JText::_('MOD_JW_TINYLETTER_DEFAULT_PRETEXT'));
$tlPopupWidth			= $params->get('tlPopupWidth',800);
$tlPopupHeight		= $params->get('tlPopupHeight',600);
$tlCredits				= $params->get('tlCredits',1);

// Stop rendering the module if no TinyLetter username is set
if(!$tlUsername){
	echo JText::_('MOD_JW_TINYLETTER_WARNING');
	return;
}

// Output content with template
echo $mod_copyrights_start;
require(JModuleHelper::getLayoutPath($mod_name,$template.DS.'default'));
echo $mod_copyrights_end;

// END
