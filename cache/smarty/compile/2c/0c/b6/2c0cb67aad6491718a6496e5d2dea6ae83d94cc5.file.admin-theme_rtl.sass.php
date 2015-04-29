<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/admin-theme_rtl.sass" */ ?>
<?php /*%%SmartyHeaderCode:298398186554074b1b38aa6-77270667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c0cb67aad6491718a6496e5d2dea6ae83d94cc5' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/admin-theme_rtl.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298398186554074b1b38aa6-77270667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1b3b1f8_70518634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1b3b1f8_70518634')) {function content_554074b1b3b1f8_70518634($_smarty_tpl) {?>// Make sure the charset is set appropriately
@charset "UTF-8"
//Compass is required to pre-compile this stylesheets to .css
@import "compass"

@import "modules/colors"
@import "modules/variables"
@import "modules/mixins"

@import "vendor/bi-app/bi-app-rtl"

@import "vendor/animate"
@import "vendor/font-awesome/font-awesome"

//Bootstrap Core : Variables + Mixins + Reset + Print
@import "vendor/bootstrap-sass/variables"
@import "vendor/bootstrap-sass/mixins"
@import "vendor/bootstrap-sass/normalize"
//@import "vendor/bootstrap-sass/print"

//import fonts
@import url($url-font-content)
@import url($url-font-headings)

//Bootstrap's rules applied only on div#content.bootstrap, nav.bootstrap, header.bootstrap, footer.bootstrap
.bootstrap
	//Core CSS
	@import "vendor/bootstrap-sass/scaffolding"
	@import "vendor/bootstrap-sass/type"
	@import "vendor/bootstrap-sass/code"
	@import "vendor/bootstrap-sass/grid"
	@import "vendor/bootstrap-sass/tables"
	@import "vendor/bootstrap-sass/forms"
	@import "vendor/bootstrap-sass/buttons"
	//Components
	@import "vendor/bootstrap-sass/component-animations"
	//@import "vendor/bootstrap-sass/glyphicons"
	@import "vendor/bootstrap-sass/dropdowns"
	@import "vendor/bootstrap-sass/button-groups"
	@import "vendor/bootstrap-sass/input-groups"
	@import "vendor/bootstrap-sass/navs"
	@import "vendor/bootstrap-sass/navbar"
	@import "vendor/bootstrap-sass/breadcrumbs"
	@import "vendor/bootstrap-sass/pagination"
	@import "vendor/bootstrap-sass/pager"
	@import "vendor/bootstrap-sass/labels"
	@import "vendor/bootstrap-sass/badges"
	//@import "vendor/bootstrap-sass/jumbotron"
	@import "vendor/bootstrap-sass/thumbnails"
	@import "vendor/bootstrap-sass/alerts"
	@import "vendor/bootstrap-sass/progress-bars"
	@import "vendor/bootstrap-sass/media"
	@import "vendor/bootstrap-sass/list-group"
	@import "vendor/bootstrap-sass/panels"
	@import "vendor/bootstrap-sass/wells"
	@import "vendor/bootstrap-sass/close"
	// Components w/ JavaScript
	@import "vendor/bootstrap-sass/tooltip"
	//@import "vendor/bootstrap-sass/popovers"
	//Utility classes
	@import "vendor/bootstrap-sass/utilities"
	@import "vendor/bootstrap-sass/responsive-utilities"

//Moved out from .bootstrap prefix since modal's javascript appends the background overlay just before /body.
@import "vendor/bootstrap-sass/modals"
@import "vendor/bootstrap-sass/carousel"

//PrestaShop Elements
@import "partials/content"
@import "partials/header"
@import "partials/footer"
@import "partials/nav"
@import "partials/icons"

.bootstrap
	//Partials
	@import "partials/commons"
	@import "partials/tables"
	@import "partials/tree"
	@import "partials/forms"
	@import "partials/kpi"
	@import "partials/switch"
	@import "partials/toolbar"
	@import "partials/date-range-picker"
	@import "partials/multistore"
	@import "partials/product"
	//Controllers
	@import "controllers/carrier-wizard"
	@import "controllers/dashboard"
	@import "controllers/login"
	@import "controllers/modules"
	@import "controllers/search"
	@import "controllers/translations"
	@import "controllers/customer-thread"
	@import "vendor/bootstrap-rtl-sass/bootstrap-rtl"

//Plug-ins
@import "partials/tinymce"
@import "partials/growl"
@import "partials/chosen"
@import "partials/ladda"

//RTL
@import "partials/rtl"

//Backward compatibility
@import "partials/backward"

<?php }} ?>
