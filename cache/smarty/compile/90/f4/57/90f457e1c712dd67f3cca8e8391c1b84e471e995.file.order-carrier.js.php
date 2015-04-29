<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:39
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/order-carrier.js" */ ?>
<?php /*%%SmartyHeaderCode:1048186924554074b3df6067-80679424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f457e1c712dd67f3cca8e8391c1b84e471e995' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/order-carrier.js',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1048186924554074b3df6067-80679424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b3dfe4c1_42672029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b3dfe4c1_42672029')) {function content_554074b3dfe4c1_42672029($_smarty_tpl) {?>/*
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

	if (!!$.prototype.fancybox)
		$("a.iframe").fancybox({
			'type': 'iframe',
			'width': 600,
			'height': 600
		});

	if (typeof cart_gift != 'undefined' && cart_gift && $('input#gift').is(':checked'))
		$('p#gift_div').show();

	$(document).on('change', 'input.delivery_option_radio', function(){
		var key = $(this).data('key');
		var id_address = parseInt($(this).data('id_address'));
		if (orderProcess == 'order' && key && id_address)
			updateExtraCarrier(key, id_address);
		else if(orderProcess == 'order-opc' && typeof updateCarrierSelectionAndGift !== 'undefined')
			updateCarrierSelectionAndGift();
	});

	$(document).on('submit', 'form[name=carrier_area]', function(){
		return acceptCGV();
	});

});

function acceptCGV()
{
	if (typeof msg_order_carrier != 'undefined' && $('#cgv').length && !$('input#cgv:checked').length)
	{
		if (!!$.prototype.fancybox)
		    $.fancybox.open([
	        {
	            type: 'inline',
	            autoScale: true,
	            minHeight: 30,
	            content: '<p class="fancybox-error">' + msg_order_carrier + '</p>'
	        }],
			{
		        padding: 0
		    });
		else
		    alert(msg_order_carrier);
	}
	else
		return true;
	return false;
}<?php }} ?>
