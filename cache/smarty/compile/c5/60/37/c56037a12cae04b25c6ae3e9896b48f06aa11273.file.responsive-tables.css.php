<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:08
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/autoload/responsive-tables.css" */ ?>
<?php /*%%SmartyHeaderCode:22737714855407494682209-56352700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c56037a12cae04b25c6ae3e9896b48f06aa11273' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/autoload/responsive-tables.css',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22737714855407494682209-56352700',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5540749468be38_04573182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5540749468be38_04573182')) {function content_5540749468be38_04573182($_smarty_tpl) {?>/* Foundation v2.1.4 http://foundation.zurb.com */
/* Artfully masterminded by ZURB  */

/* -------------------------------------------------- 
   Table of Contents
-----------------------------------------------------
:: Shared Styles
:: Page Name 1
:: Page Name 2
*/


/* -----------------------------------------
   Shared Styles
----------------------------------------- */

table th { font-weight: bold; }
table td, table th { padding: 9px 10px; text-align: left; }

/* Mobile */
@media only screen and (max-width: 767px) {
	
	table.responsive { margin-bottom: 0; }
	
	.pinned { position: absolute; left: 0; top: 0; background: #fff; width: 35%; overflow: hidden; overflow-x: scroll; border-right: 1px solid #ccc; border-left: 1px solid #ccc; }
	.pinned table { border-right: none; border-left: none; width: 100%; }
	.pinned table th, .pinned table td { white-space: nowrap; }
	.pinned td:last-child { border-bottom: 0; }
	
	div.table-wrapper { position: relative; margin-bottom: 20px; overflow: hidden; border-right: 1px solid #ccc; }
	div.table-wrapper div.scrollable { margin-left: 35%; }
	div.table-wrapper div.scrollable { overflow: scroll; overflow-y: hidden; }	
	
	table.responsive td, table.responsive th { position: relative; white-space: nowrap; overflow: hidden; }
	table.responsive th:first-child, table.responsive td:first-child, table.responsive td:first-child, table.responsive.pinned td { display: none; }
	
	
}
<?php }} ?>
