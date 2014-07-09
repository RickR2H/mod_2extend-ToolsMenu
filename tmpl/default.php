<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	mod_r2hmenu
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

JHTML::_('behavior.modal');
JHTML::_('jquery.framework');

$dummytext1 = $params->get('dummytext1');
$dummytext2 = $params->get('dummytext2','Geen tekst aanwezig');
$CustomButton1 = $params->get('CustomButton1');
$CustomButton1URL = $params->get('CustomButton1URL');
$CustomButton2 = $params->get('CustomButton2');
$CustomButton2URL = $params->get('CustomButton2URL');
$target1 = $params->get('target1');
$target2 = $params->get('target2');
?>

<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$explodeURL = explode("?",$actual_link);
?>

<ul class="nav" id="menu">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Tools <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a target="_blank" href="<?php echo $explodeURL[0]; ?>" class="Controlpaneel">Controlpanel</a></li>
        <li class="divider"><span></span></li>
        <li class="dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-toggle menu-menu">Joomla Componenten</a>
            <ul class="dropdown-menu menu-component" id="menu-com-menus-items-mainmenu">
            <li><a target="_blank" href="<?php echo $explodeURL[0]; ?>?option=com_menus" class="R2H-menus">Menu's</a></li>
            <li><a target="_blank" href="<?php echo $explodeURL[0]; ?>?option=com_content" class="R2H-menus">Artikelen</a></li>
            <li><a target="_blank" href="<?php echo $explodeURL[0]; ?>?option=com_modules" class="R2H-menus">Modules</a></li>
            <li><a target="_blank" href="<?php echo $explodeURL[0]; ?>?option=com_plugins" class="R2H-menus">Plugins</a></li>
			<li><a target="_blank" href="<?php echo JURI::root(); ?>?option=com_users" class="R2H-menus">Frontend User login</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-toggle menu-menu">Designer tools</a>
            <ul class="dropdown-menu menu-component" id="menu-com-menus-items-mainmenu">
            <li><a href="#dummyDiv1" class="modal">Lorum Ipsum Tekst</a></li>
            <li><a href="#dummyDiv2" class="modal">Custom Tekst</a></li>
            </ul>
        </li>
        <?php
            if (!empty($CustomButton1) && !empty($CustomButton1URL))
        {
        ?>
        <li><a target="<?php echo $params->get('target1'); ?>" href="<?php echo $CustomButton1URL; ?>"><?php echo $CustomButton1; ?></a></li>
        <?php
        }
        ?>
        <?php
            if (!empty($CustomButton2) && !empty($CustomButton2URL))
        {
        ?>
        <li><a target="<?php echo $params->get('target2'); ?>" href="<?php echo $CustomButton1URL; ?>"></a><?php echo $CustomButton1; ?></a></li>
        <?php
        }
        ?>
        </ul>
    </li>
</ul>

<div style="display:none;">

    <div id="dummyDiv1">
        <?php echo $dummytext1; ?>       
        </div>
    
    <div id="dummyDiv2">
    <?php echo $dummytext2; ?>
    </div>

    <div id="Opmerkingen">


    </div>
    
</div>