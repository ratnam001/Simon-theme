<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_type.scss" */ ?>
<?php /*%%SmartyHeaderCode:1634206364554074a961b176-23050204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ad96446e1c88861456c92a86329c248c6db263' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_type.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1634206364554074a961b176-23050204',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9709a76_04759522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9709a76_04759522')) {function content_554074a9709a76_04759522($_smarty_tpl) {?>//
// Typography
// --------------------------------------------------


// Body text
// -------------------------

p {
  margin: 0 0 ($line-height-computed / 2);
}
.lead {
  margin-bottom: $line-height-computed;
  font-size: ($font-size-base * 1.15);
  font-weight: 200;
  line-height: 1.4;

  @media (min-width: 768px) {
    font-size: ($font-size-base * 1.5);
  }
}


// Emphasis & misc
// -------------------------

// Ex: 14px base font * 85% = about 12px
small   { font-size: 85%; }

// Undo browser default styling
cite    { font-style: normal; }

// Contextual emphasis
.text-muted          { color: $text-muted; }
.text-primary        { color: $brand-primary; }
.text-warning        { color: $state-warning-text; }
.text-danger         { color: $state-danger-text; }
.text-success        { color: $state-success-text; }
.text-info           { color: $state-info-text; }

// Alignment
.text-left           { text-align: left; }
.text-right          { text-align: right; }
.text-center         { text-align: center; }


// Headings
// -------------------------

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: $headings-font-family;
  font-weight: $headings-font-weight;
  line-height: $headings-line-height;
  small {
    font-weight: normal;
    line-height: 1;
    color: $headings-small-color;
  }
}

h1,
h2,
h3 {
  margin-top: $line-height-computed;
  margin-bottom: ($line-height-computed / 2);
}
h4,
h5,
h6 {
  margin-top: ($line-height-computed / 2);
  margin-bottom: ($line-height-computed / 2);
}

h1, .h1 { font-size: floor($font-size-base * 2.60); } // ~36px
h2, .h2 { font-size: floor($font-size-base * 2.15); } // ~30px
h3, .h3 { font-size: ceil($font-size-base * 1.70); } // ~24px
h4, .h4 { font-size: ceil($font-size-base * 1.25); } // ~18px
h5, .h5 { font-size:  $font-size-base; }
h6, .h6 { font-size: ceil($font-size-base * 0.85); } // ~12px

h1 small, .h1 small { font-size: ceil($font-size-base * 1.70); } // ~24px
h2 small, .h2 small { font-size: ceil($font-size-base * 1.25); } // ~18px
h3 small, .h3 small,
h4 small, .h4 small { font-size: $font-size-base; }


// Page header
// -------------------------

.page-header {
  padding-bottom: (($line-height-computed / 2) - 1);
  margin: ($line-height-computed * 2) 0 $line-height-computed;
  border-bottom: 1px solid $page-header-border-color;
}



// Lists
// --------------------------------------------------

// Unordered and Ordered lists
ul,
ol {
  margin-top: 0;
  margin-bottom: ($line-height-computed / 2);
  ul,
  ol{
    margin-bottom: 0;
  }
}

// List options

// Unstyled keeps list items block level, just removes default browser padding and list-style
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
// Inline turns list items into inline-block
.list-inline {
  @extend .list-unstyled;
  > li {
    display: inline-block;
    padding-left: 5px;
    padding-right: 5px;
  }
}

// Description Lists
dl {
  margin-bottom: $line-height-computed;
}
dt,
dd {
  line-height: $line-height-base;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0; // Undo browser default
}

// Horizontal description lists
//
// Defaults to being stacked without any of the below styles applied, until the
// grid breakpoint is reached (default of ~768px).

@media (min-width: $grid-float-breakpoint) {
  .dl-horizontal {
    dt {
      float: left;
      width: ($component-offset-horizontal - 20);
      clear: left;
      text-align: right;
      @include text-overflow();
    }
    dd {
      margin-left: $component-offset-horizontal;
      @include clearfix(); // Clear the floated `dt` if an empty `dd` is present
    }
  }
}

// MISC
// ----

// Abbreviations and acronyms
abbr[title],
// Added data-* attribute to help out our tooltip plugin, per https://github.com/twbs/bootstrap/issues/5257
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted $abbr-border-color;
}
abbr.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

// Blockquotes
blockquote {
  padding: ($line-height-computed / 2) $line-height-computed;
  margin: 0 0 $line-height-computed;
  border-left: 5px solid $blockquote-border-color;
  p {
    font-size: ($font-size-base * 1.25);
    font-weight: 300;
    line-height: 1.25;
  }
  p:last-child {
    margin-bottom: 0;
  }
  small {
    display: block;
    line-height: $line-height-base;
    color: $blockquote-small-color;
    &:before {
      content: '\2014 \00A0';// EM DASH, NBSP
    }
  }

  // Float right with text-align: right
  &.pull-right {
    padding-right: 15px;
    padding-left: 0;
    border-right: 5px solid $blockquote-border-color;
    border-left: 0;
    p,
    small {
      text-align: right;
    }
    small {
      &:before {
        content: '';
      }
      &:after {
        content: '\00A0 \2014';// NBSP, EM DASH
      }
    }
  }
}

// Quotes
q:before,
q:after,
blockquote:before,
blockquote:after {
  content: "";
}

// Addresses
address {
  display: block;
  margin-bottom: $line-height-computed;
  font-style: normal;
  line-height: $line-height-base;
}
<?php }} ?>