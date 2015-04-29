<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_print.scss" */ ?>
<?php /*%%SmartyHeaderCode:699260751554074a88774b4-73008532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b09b3f25c3188860f6bd2d8e5ef019779b817d6' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_print.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699260751554074a88774b4-73008532',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a88a6471_55818275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a88a6471_55818275')) {function content_554074a88a6471_55818275($_smarty_tpl) {?>//
// Basic print styles
// --------------------------------------------------
// Source: https://github.com/h5bp/html5-boilerplate/blob/master/css/main.css

@media print {

  * {
    text-shadow: none !important;
    color: #000 !important; // Black prints faster: h5bp.com/s
    background: transparent !important;
    box-shadow: none !important;
  }

  a,
  a:visited {
    text-decoration: underline;
  }

  a[href]:after {
    content: " (" attr(href) ")";
  }

  abbr[title]:after {
    content: " (" attr(title) ")";
  }

  // Don't show links for images, or javascript/internal links
  .ir a:after,
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }

  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group; // h5bp.com/t
  }

  tr,
  img {
    page-break-inside: avoid;
  }

  img {
    max-width: 100% !important;
  }

  @page {
    margin: 2cm .5cm;
  }

  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }

  h2,
  h3 {
    page-break-after: avoid;
  }

  // Bootstrap components
  .navbar {
    display: none;
  }
  .table {
    td,
    th {
      background-color: #fff !important;
    }
  }
  .btn,
  .dropup > .btn {
    > .caret {
      border-top-color: #000 !important;
    }
  }
  .label {
    border: 1px solid #000;
  }

  .table {
    border-collapse: collapse !important;
  }
  .table-bordered {
    th,
    td {
      border: 1px solid #ddd !important;
    }
  }

}
<?php }} ?>
