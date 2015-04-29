<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:39
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/modules/loyalty/js/loyalty.js" */ ?>
<?php /*%%SmartyHeaderCode:380614871554074b39915f4-07039379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b203aaf41919d9568d938408739b21a92e2688b9' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/js/modules/loyalty/js/loyalty.js',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '380614871554074b39915f4-07039379',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b3998017_59339501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b3998017_59339501')) {function content_554074b3998017_59339501($_smarty_tpl) {?>/*
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
	$(document).on('change', '#our_price_display', function(e){
		updateLoyaltyView(parseInt($('#our_price_display').text()));
	})
});

function updateLoyaltyView(new_price) {
	if (typeof(new_price) == 'undefined' || typeof(productPriceWithoutReduction) == 'undefined')
			return;

	var points = Math.round(new_price / point_rate);
	var total_points = points_in_cart + points;
	var voucher = total_points * point_value;

	if (!none_award && productPriceWithoutReduction != new_price) {
		$('#loyalty').html(loyalty_already);
	}
	else if (!points) {
		$('#loyalty').html(loyalty_nopoints);
	}
	else
	{
		var content = loyalty_willcollect + " <b><span id=\"loyalty_points\">"+points+'</span> ';
		if (points > 1)
			content += loyalty_points + "</b>. ";
		else
			content += loyalty_point + "</b>. ";

		content += loyalty_total + " <b><span id=\"total_loyalty_points\">"+total_points+'</span> ';
		if (total_points > 1)
			content += loyalty_points;
		else
			content += loyalty_point;

		content += '</b> ' + loyalty_converted + ' ';
		content += '<span id="loyalty_price">'+formatCurrency(voucher, currencyFormat, currencySign, currencyBlank)+'</span>.';
		$('#loyalty').html(content);
	}
}
<?php }} ?>
