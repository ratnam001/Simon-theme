<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:39
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/modules/crossselling/js/crossselling.js" */ ?>
<?php /*%%SmartyHeaderCode:329673512554074b3b96e28-05682071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11a92c0fb42e6cff6232b72c7a2a43948c6bf57c' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/modules/crossselling/js/crossselling.js',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '329673512554074b3b96e28-05682071',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b3b99c95_28717152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b3b99c95_28717152')) {function content_554074b3b99c95_28717152($_smarty_tpl) {?>/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#crossselling_list_car').bxSlider({
			minSlides: 2,
			maxSlides: 6,
			slideWidth: 178,
			slideMargin: 20,
			pager: false,
			nextText: '',
			prevText: '',
			moveSlides:1,
			infiniteLoop:false,
			hideControlOnEnd: true
		});
});
<?php }} ?>
