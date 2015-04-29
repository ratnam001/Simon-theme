<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_progress-bars.scss" */ ?>
<?php /*%%SmartyHeaderCode:2010195338554074b17ddbd7-14243059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f73ca12af52e0a93277e984c2941789863fe6b04' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_progress-bars.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2010195338554074b17ddbd7-14243059',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b17f8387_84441555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b17f8387_84441555')) {function content_554074b17f8387_84441555($_smarty_tpl) {?>//
// Progress bars
// --------------------------------------------------


// Bar animations
// -------------------------

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
  line-height: $line-height-computed;
  color: $progress-bar-color;
  text-align: center;
  background-color: $progress-bar-bg;
  @include box-shadow(inset 0 -1px 0 rgba(0,0,0,.15));
  @include transition(width .6s ease);
}

// Striped bars
.progress-striped .progress-bar {
  @include gradient-striped();
  background-size: 40px 40px;
}

// Call animation for the active one
.progress.active .progress-bar {
  @include animation(progress-bar-stripes 2s linear infinite);
}

// Account for lower percentages
.progress-bar {
  &[aria-valuenow="1"],
  &[aria-valuenow="2"] {
    min-width: 30px;
  }

  &[aria-valuenow="0"] {
    color: $gray-light;
    min-width: 30px;
    background-color: transparent;
    background-image: none;
    box-shadow: none;
  }
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
