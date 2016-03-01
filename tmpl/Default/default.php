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

/* Here we call the stylesheet template.css from a folder called 'css' and located at the same directory with this template file. */
$filePath = JURI::root(true).str_replace(JPATH_SITE,'',dirname(__FILE__));
$document->addStyleSheet($filePath.'/css/template.css');

?>
<div id="jwTinyLetterInstance<?php echo $module->id; ?>" class="jwTinyLetterContainer<?php if($moduleclass_sfx) echo ' '.$moduleclass_sfx; ?>">
	<?php if($tlShowPretext): ?>
	<div class="jwTinyLetterPretext">
		<?php echo $tlPretext; ?>
	</div>
	<?php endif; ?>
	<form class="jwTinyLetterForm" action="https://tinyletter.com/<?php echo $tlUsername; ?>" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/<?php echo $tlUsername; ?>', 'popupwindow', 'scrollbars=yes,width=<?php echo $tlPopupWidth; ?>,height=<?php echo $tlPopupHeight; ?>');return true;">
		<input class="inputbox" type="text" name="email" id="tlemail" value="<?php echo JText::_('MOD_JW_TINYLETTER_ENTER_YOUR_EMAIL_ADDRESS'); ?>" onfocus="if(this.value=='<?php echo JText::_('MOD_JW_TINYLETTER_ENTER_YOUR_EMAIL_ADDRESS'); ?>') this.value='';" onblur="if(this.value=='') this.value='<?php echo JText::_('MOD_JW_TINYLETTER_ENTER_YOUR_EMAIL_ADDRESS'); ?>';" />
		<input class="button" type="submit" value="<?php echo JText::_('MOD_JW_TINYLETTER_SUBSCRIBE'); ?>" />
		<input type="hidden" value="1" name="embed" />
	</form>
	<?php if($tlCredits): ?>
	<div class="jwTinyLetterCredits">
		powered by <a href="https://tinyletter.com" target="_blank">TinyLetter</a>
	</div>
	<?php endif; ?>
</div>
<div class="clr"></div>
