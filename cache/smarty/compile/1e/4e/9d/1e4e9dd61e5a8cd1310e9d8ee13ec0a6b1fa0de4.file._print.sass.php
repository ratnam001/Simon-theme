<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_print.sass" */ ?>
<?php /*%%SmartyHeaderCode:723418511554074abe39d90-51913637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e4e9dd61e5a8cd1310e9d8ee13ec0a6b1fa0de4' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_print.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '723418511554074abe39d90-51913637',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abe3be80_61190351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abe3be80_61190351')) {function content_554074abe3be80_61190351($_smarty_tpl) {?>@media print
	*
		color: #000 !important // Black prints faster: h5bp.com/s
		border-color: #000 !important
		background: transparent !important
		font-family: Georgia, "Times New Roman", Times, serif !important
		@include text-shadow(none!important)
		@include box-shadow(none!important)
	// commons
	[class^="icon-"], [class^="process-icon-"]
		font-family: $icon-font-family !important
	#header, #footer, #nav-sidebar, #nav-topbar, .hidden-print
		display: none !important
	.visible-print
		display: block !important
	hr
		display: none !important
	#main
		width: 8.5in !important
		float: none !important
		margin: 0 auto !important
		padding: 0 !important
		#content.bootstrap
			margin: 0 !important
			padding: 0 !important
			.page-head
				display: none !important
			.panel
				page-break-inside: avoid !important
				clear: both !important
				margin: 0 0 40px !important
				padding: 0 !important
				border: none !important
				@include box-shadow(none!important)
				.panel-heading
					margin: 0 0 20px !important
				.panel, .well
					margin: 0 !important
			.tab-pane
				margin-bottom: 20px !important
			.row
				margin-bottom: 20px !important
			.panel
				clear: both !important
			.btn
				display: none !important
			.panel-heading-action
				display: none
			.nav-tabs li a
				display: none
				border-bottom-color: white !important
				background-color: white !important
			.tab-content > .tab-pane
				display: block !important
				opacity: 1 !important
			h4
				margin: 0 0 10px 0 !important
			// orders
			#shipping
				.form-horizontal
					padding-bottom: 10px !important
			#addressShipping
				width: 49% !important
				float: left !important
				margin-bottom: 0 !important
			#addressInvoice
				width: 49% !important
				float: right !important	
				margin-bottom: 0 !important
			#status
				tr:first-child td
					font-weight: bold !important
			.table
				border: solid 1px black !important
				margin-bottom: 10px !important
				th
					font-style: italic
			.label-inactive
				font-size: 11pt !important
				text-decoration: line-through !important
				i
					display: none !important
			.kpi-container.panel
				margin: 30px 0 20px 0 !important
				border: solid 1px black !important
				.box-stats
					padding: 10px 0 !important
					height: auto !important
					width: 25% !important
					font-size: 8pt !important
					i
						font-size: 20pt !important
			.alert
				border: 1px solid black !important
				&:before
					color: black !important
			.table-responsive
				border: none !important
				margin: 0 !important
			.panel-total td
				font-size: 13pt!important
<?php }} ?>
