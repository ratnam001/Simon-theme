<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_progress-bars.scss" */ ?>
<?php /*%%SmartyHeaderCode:1324178354554074a95b3873-16172401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '324286c32c0c21e755ba7909a30788597922d401' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_progress-bars.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1324178354554074a95b3873-16172401',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a95e36b1_19806073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a95e36b1_19806073')) {function content_554074a95e36b1_19806073($_smarty_tpl) {?>//
// Progress bars
// --------------------------------------------------


// Bar animations
// -------------------------

// Webkit
@-webkit-keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}

// Firefox
@-moz-keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}

// Opera
@-o-keyframes progress-bar-stripes {
  from  { background-position: 0 0; }
  to    { background-position: 40px 0; }
}

// Spec and IE10+
@keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}



// Bar itself
// -------------------------

// Outer container
.progress {
  overflow: hidden;
  height: $line-height-computed;
  margin-bottom: $line-height-computed;
  background-color: $progress-bg;
  border-radius: $border-radius-base;
  @include box-shadow(inset 0 1px 2px rgba(0,0,0,.1));
}

// Bar of progress
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: $font-size-small;
  color: $progress-bar-color;
  text-align: center;
  background-color: $progress-bar-bg;
  @include box-shadow(inset 0 -1px 0 rgba(0,0,0,.15));
  @include transition(width .6s ease);
}

// Striped bars
.progress-striped .progress-bar {
  @include gradient-striped($progress-bar-bg);
  background-size: 40px 40px;
}

// Call animation for the active one
.progress.active .progress-bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
     -moz-animation: progress-bar-stripes 2s linear infinite;
      -ms-animation: progress-bar-stripes 2s linear infinite;
       -o-animation: progress-bar-stripes 2s linear infinite;
          animation: progress-bar-stripes 2s linear infinite;
}



// Variations
// -------------------------

.progress-bar-success {
  @include progress-bar-variant($progress-bar-success-bg);
}

.progress-bar-info {
  @include progress-bar-variant($progress-bar-info-bg);
}

.progress-bar-warning {
  @include progress-bar-variant($progress-bar-warning-bg);
}

.progress-bar-danger {
  @include progress-bar-variant($progress-bar-danger-bg);
}
<?php }} ?>
