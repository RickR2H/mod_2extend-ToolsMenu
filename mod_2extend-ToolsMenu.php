<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	mod_2extend-ToolsMenu
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

// Include the syndicate functions only once
//require_once dirname(__FILE__).'/helper.php';

//Returns the path of the layout file
require JModuleHelper::getLayoutPath('mod_2extend-ToolsMenu', $params->get('layout', 'default'));
?>