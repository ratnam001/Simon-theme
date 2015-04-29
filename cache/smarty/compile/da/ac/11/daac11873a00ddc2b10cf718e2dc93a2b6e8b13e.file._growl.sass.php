<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_growl.sass" */ ?>
<?php /*%%SmartyHeaderCode:1722649263554074abd53851-12453434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daac11873a00ddc2b10cf718e2dc93a2b6e8b13e' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_growl.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1722649263554074abd53851-12453434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'namespace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abe09ca4_94300676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abe09ca4_94300676')) {function content_554074abe09ca4_94300676($_smarty_tpl) {?>/*
 * jQuery Growl
 * Copyright 2013 Kevin Sylvestre
 * 1.1.4
 */

$namespace: "growl"
$duration: 0.4s

#growls
	z-index: 50000
	position: fixed
	
	&.default
		top: 100px
		@include right(10px)
	&.tl
		top: 10px
		@include left(10px)
	&.tr
		top: 10px
		@include right(10px)
	&.bl
		bottom: 10px
		@include left(10px)
	&.br
		bottom: 10px
		@include right(10px)

.growl
	opacity: 1
	position: relative
	@include border-radius(4px)
	@include transition(all $duration ease-in-out)

	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-incoming
		opacity: 0.0

	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-outgoing
		opacity: 0.0

	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-small
		width: 200px
		padding: 5px
		margin: 5px
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-medium
		width: 250px
		padding: 10px
		margin: 10px
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-large
		width: 300px
		padding: 15px
		margin: 15px

	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-default
		color: #FFF
		background: gray
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-error
		color: white
		background: rgba($brand-danger,0.8)
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-notice
		color: white
		background: rgba($brand-success,0.8)
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-warning
		color: white
		background: rgba($brand-warning,0.8)
	.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-close
		cursor: pointer
		font-size: 14px
		line-height: 18px
		font-weight: normal
		font-family: helvetica, verdana, sans-serif
		@include float(right)
	.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-title
		font-size: 18px
		line-height: 24px
	.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-message
		font-size: 14px
		line-height: 18px<?php }} ?>
