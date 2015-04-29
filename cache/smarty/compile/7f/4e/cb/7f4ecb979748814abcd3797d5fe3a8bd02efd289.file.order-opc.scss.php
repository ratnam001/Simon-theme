<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/order-opc.scss" */ ?>
<?php /*%%SmartyHeaderCode:95437868554074aa8934a2-41787935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f4ecb979748814abcd3797d5fe3a8bd02efd289' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/order-opc.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95437868554074aa8934a2-41787935',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa8d1bb0_71502686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa8d1bb0_71502686')) {function content_554074aa8d1bb0_71502686($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

/********************************************************
			One-Page Checkout Styles
********************************************************/

#order-opc {
	line-height: 20px;
	.box {
		padding-bottom: 20px;
	}
	.cart_navigation {
		margin-bottom: 53px;
	}
	.page-heading.step-num {
		position: relative;
		padding-left: 45px;
		overflow: visible;
		span {
			font-weight: bold;
			font-size: 42px;
			line-height: 51px;
			font-style: italic;
			color: $base-text-color;
			position: absolute;
			left: 10px;
			top: -14px;
		}
	}
	.form-group {
		margin-bottom: 2px;
			.form-control {
				max-width: 271px;
			}
	}
	.lost_password {
		display: inline-block;
		text-decoration: underline;
		margin: 5px 0 14px;
		&:hover {
			text-decoration: none;
		}
	}
	.title_block {
		font-weight: bold;
		color: $base-text-color;
		padding: 3px 0 6px;
	}
	.opc-button {
		padding: 11px 0 0 0;
	}
	ul.bullet {
		line-height: 22px;
		margin-bottom: 5px;
	}
	.date-select {
		padding-bottom: 10px;
	}
	.opc-add-save {
		border-top: 1px solid $base-border-color;
		margin-top: 20px;
		padding-top: 20px;
	}
	#message {
		margin-bottom: 35px;
	}
	#opc_payment_methods {
		margin-bottom: 30px;
		p.warning{
			color: #F13340;
			font-weight: 700;
		}
	}
	#opc_account {
		margin-bottom: 30px;
	}
	.address_delivery.select {
		margin-bottom: 15px;
	}
	#address_invoice_form.form-group {
		margin-bottom: 30px;
	}
}

#new_account_form .id_state,
#new_account_form .dni,
#new_account_form .postcode {
	display: none;
}<?php }} ?>
