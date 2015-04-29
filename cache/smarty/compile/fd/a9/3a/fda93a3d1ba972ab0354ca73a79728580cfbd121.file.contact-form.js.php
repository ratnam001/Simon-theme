<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:39
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/contact-form.js" */ ?>
<?php /*%%SmartyHeaderCode:1636119015554074b3e007d4-33555716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda93a3d1ba972ab0354ca73a79728580cfbd121' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/contact-form.js',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1636119015554074b3e007d4-33555716',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b3e062c6_27146269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b3e062c6_27146269')) {function content_554074b3e062c6_27146269($_smarty_tpl) {?>/*
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
//global variables
if (typeof $.uniform.defaults !== 'undefined')
{
	if (typeof contact_fileDefaultHtml !== 'undefined')
		$.uniform.defaults.fileDefaultHtml = contact_fileDefaultHtml;
	if (typeof contact_fileButtonHtml !== 'undefined')
		$.uniform.defaults.fileButtonHtml = contact_fileButtonHtml;
}

$(document).ready(function(){
	$(document).on('change', 'select[name=id_contact]', function(){
		$('.desc_contact').hide();
		$('#desc_contact' + parseInt($(this).val())).show();
	});

	$(document).on('change', 'select[name=id_order]', function (){
		showProductSelect($(this).attr('value'));
	});

	showProductSelect($('select[name=id_order]').attr('value'));
});

function showProductSelect(id_order)
{
	$('.product_select').hide().prop('disabled', 'disabled').parent('.selector').hide();
	$('.product_select').parents('.form-group').find('label').hide();
	if ($('#' + id_order + '_order_products').length > 0)
	{
		$('#' + id_order + '_order_products').removeProp('disabled').show().parent('.selector').removeClass('disabled').show();
		$('.product_select').parents('.form-group').show().find('label').show();
	}
}
<?php }} ?>
