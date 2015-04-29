<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/authentication.scss" */ ?>
<?php /*%%SmartyHeaderCode:417644124554074a86cc373-43472683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '761ba7c31d3109f52ed125d393976ed610f660a4' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/authentication.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417644124554074a86cc373-43472683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a8704032_71168005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a8704032_71168005')) {function content_554074a8704032_71168005($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
/**********************************************************
				Authentication Styles
**********************************************************/
#account-creation_form .id_state,
#account-creation_form .dni,
#account-creation_form .postcode {
	display: none;
}

#create-account_form {
	min-height: 297px;
	p {
		margin-bottom: 8px;
	}
	.form-group {
		margin: 0 0 20px 0;
	}
}

#login_form {
	min-height: 297px;
	.form-group {
		margin: 0 0 3px 0;
		&.lost_password {
			margin: 14px 0 15px 0;
			a {
				text-decoration: underline;
				&:hover {
					text-decoration: none;
				}
			}
		}
	}
}

#login_form, #create-account_form {
	.form-control {
		max-width: 271px;
	}
}<?php }} ?>
