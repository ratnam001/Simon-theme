<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/controllers/_login.sass" */ ?>
<?php /*%%SmartyHeaderCode:41923428554074b1b69ca0-26967076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '822bac8069790b6acc4aaf20153d4686b961acc2' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/controllers/_login.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41923428554074b1b69ca0-26967076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1b91695_42377821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1b91695_42377821')) {function content_554074b1b91695_42377821($_smarty_tpl) {?>@mixin background-image-with-ms($image)
	@include background-image($image) // Compass default version, for everything but IE 10.
	background-image: -ms-#<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
 // Vendor prefixes for IE 10.

#login
	min-height: 100%
	padding-bottom: 45px
	background-color: #4D394B // Old browsers
	@include background-image-with-ms(linear-gradient(top left,#2C3042,#4D394B))
	
#login-header
	padding-top: 40px
	margin-bottom: 30px
	color: white
	h1, h4
		margin: 0
		padding: 0

#login-panel
	margin: 0 auto
	width: 420px

	@media (max-width: $screen-phone)
		width: 90%
	.panel
		@include box-shadow(rgba(white,0.45) 0 0 0 6px)
	.panel-footer
		height: inherit
		margin: 0 -20px -20px
	.flip-container
		height: 370px
		@include perspective(1000px)
		transform-style: preserve-3d
		//@include animate(fadeInDown, 0.3s)
		&.flip
			.flipper
				@include rotateY(180deg)
			.back
				@include backface-visibility(visible)
	.flipper
		position: relative
		transform-style: preserve-3d
		@include transition-duration(0.6s)
		@include transform-style
	.front, .back
		width: 100%
		padding: 20px
		position: absolute
		transition: 0.6s
		transform-style: preserve-3d
		top: 0
		@include backface-visibility(hidden)
		@include left(0)
	.front
		@include rotateY(0)
		z-index: 2
	.back
		display: none
		z-index: 1
		@include rotateY(180deg)
	#remind-me
		margin-top: 0

#login-footer
	a
		color: #A0AAB5
<?php }} ?>
