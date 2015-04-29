<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/history.scss" */ ?>
<?php /*%%SmartyHeaderCode:476526774554074ab128f57-95127834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87cbf31e002e4074856d6f2527421f872623869d' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/history.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '476526774554074ab128f57-95127834',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ab1551a2_02623362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ab1551a2_02623362')) {function content_554074ab1551a2_02623362($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
/************************************************************
				History Page Styles
************************************************************/
#order-detail-content table {
	.return_quantity_buttons {
		margin-top: 3px;
		a {
			display: none;
			float: left;
			&+a {
				margin-left: 3px;
			}
		}
	}
	.order_qte_input {
		display: none;
		width: 57px;
		height: 27px;
		line-height: 27px;
		padding: 0;
		text-align: center;
	}
	label {
		font-weight: 400;
	}
}

.table {
	td.history_detail {
		a + a {
			margin-left: 14px;
		}
	}
	td.step-by-step-date {
		width: 105px;
	}
	tfoot {

		strong {
			color: $base-text-color;
		}
	}
}

.info-order {
	i {
		font-size: 20px;
		&.icon-gift {
			color: #f13340;
		}
		&.icon-repeat {
			color: #55c65e;
		}
	}
}

#sendOrderMessage {
	margin-bottom: 30px;
	select.form-control {
		width: 263px;
	}
}<?php }} ?>
