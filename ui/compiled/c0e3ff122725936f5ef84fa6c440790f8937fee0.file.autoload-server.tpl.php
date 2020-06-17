<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 17:03:12
         compiled from "ui\theme\default\autoload-server.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15655ee9ea6068c154-73793240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e3ff122725936f5ef84fa6c440790f8937fee0' => 
    array (
      0 => 'ui\\theme\\default\\autoload-server.tpl',
      1 => 1445789810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15655ee9ea6068c154-73793240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'd' => 0,
    'ds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee9ea606c9509_74867075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9ea606c9509_74867075')) {function content_5ee9ea606c9509_74867075($_smarty_tpl) {?><option value="">Select Routers</option>
<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</option>
<?php } ?><?php }} ?>