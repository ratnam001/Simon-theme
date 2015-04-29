<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/controllers/_carrier-wizard.sass" */ ?>
<?php /*%%SmartyHeaderCode:1866634592554074b1b75bf2-01373675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a4f4788aa19494dfd7386423f871f4ca7c90a8' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/controllers/_carrier-wizard.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1866634592554074b1b75bf2-01373675',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1b77db2_14604606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1b77db2_14604606')) {function content_554074b1b77db2_14604606($_smarty_tpl) {?>#carrier_wizard
	position: relative
	display: block
	.stepContainer
		position: relative
		display: block
		//overflow: hidden
		clear: both
		div.content
			position: absolute
			display: block
			width: 100%
			clear: both
		.StepTitle
			display: block
			position: relative
			clear: both
	ul.anchor
		position: relative
		display: block
		float: left
		list-style: none
		padding: 0
		margin: 0 0 10px 0
		clear: both
		width: 100%
		&.nbr_steps_4
			li
				width: 25%
				float: left
		&.nbr_steps_5
			li
				width: 25%
				float: left
	li
		position: relative
		display: block
		overflow: hidden
		a
			color: #ccc
			height: 32px
			display: block
			position: relative
			margin: 0 16px 0 0
			text-decoration: none
			outline-style: none
			.stepNumber
				position: relative
				float: left
				width: 24px
				height: 32px
				margin-right: 3px
				text-align: center
				padding: 0 5px
				font-size: 30px
				line-height: 32px
				color: white
			.stepDesc
				position: relative
				text-align: left
				font-size: 13px
				height: 32px
				display: table-cell
				vertical-align: middle
				line-height: 13px
			.chevron
				border: 16px solid transparent
				border-left: 14px solid white
				border-right: 0
				position: absolute
				right: -16px
				top: 0
				&:after
					border: 16px solid transparent
					border-left: 14px solid #ccc
					border-right: 0
					position: absolute
					content: ""
					right: 2px
					top: -16px
		a.disabled
			color: #777
			background-color: #ccc
			.chevron:after
				border-left: 14px solid #ccc
		a.selected
			color: #F8F8F8
			cursor: text
			background-color: $main-color
			.chevron:after
				border-left: 14px solid $main-color
		a.done
			color: white
			background-color: $brand-success
			.chevron:after
				border-left: 14px solid $brand-success
	.loader
		display: none
	.buttonNext

	.buttonDisabled

	.buttonPrevious

	.buttonFinish

	.msgBox
		position: relative
		display: none
		float: left
		margin: 4px 0 0 5px
		padding: 5px
		border: 1px solid #FFD700
		background-color: #FFFFDD
		color: #5A5655
		+border-radius(5px)
	.msgBox .content
		padding: 0px
		float: left
	#carrier_logo_block
		right: 10px
	.wizard_error
		@extend .alert
		@extend .alert-danger
	.range_inf td, .range_sup td
		background-color: #ccc
	.range_type
		width: 220px
		text-align: right
		font-weight: bold
	.range_data
		width: 110px
	.range_sign
		width: 18px
		font-size: 20px
		text-align: center
	.range_data_new
		width: 110px
	table#zones_table
		width: auto
	.field_error
		border-color: $brand-danger
	.actionBar
		height: 30px
	.actionBar a 
		float: right
		margin-right: 10px<?php }} ?>
