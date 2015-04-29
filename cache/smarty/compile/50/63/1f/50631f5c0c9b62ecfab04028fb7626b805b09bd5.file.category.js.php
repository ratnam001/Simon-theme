<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:39
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/category.js" */ ?>
<?php /*%%SmartyHeaderCode:1784762985554074b3c28b83-75817646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50631f5c0c9b62ecfab04028fb7626b805b09bd5' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/category.js',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1784762985554074b3c28b83-75817646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b3c2e693_77269182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b3c2e693_77269182')) {function content_554074b3c2e693_77269182($_smarty_tpl) {?>/*
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
$(document).ready(function(){
	resizeCatimg();

});

$(window).resize(function(){
	resizeCatimg();
});

$(document).on('click', '.lnk_more', function(e){
	e.preventDefault();
	$('#category_description_short').hide(); 
	$('#category_description_full').show(); 
	$(this).hide();
});

function resizeCatimg()
{
	var div = $('.cat_desc').parent('div');
	
	if (div.css('background-image') == 'none')
		return;

	var image = new Image;
	$(image).load(function(){
	    var width  = image.width;
	    var height = image.height;
		var ratio = parseFloat(height / width);
		var calc = Math.round(ratio * parseInt(div.outerWidth(false)));
		div.css('min-height', calc);
	});
	if (div.length)
		image.src = div.css('background-image').replace(/url\("?|"?\)$/ig, '');
}<?php }} ?>
