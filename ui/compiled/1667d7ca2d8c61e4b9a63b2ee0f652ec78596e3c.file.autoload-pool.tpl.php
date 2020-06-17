<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 15:38:02
         compiled from "ui\theme\default\autoload-pool.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270715ee9eb8253b734-84552173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1667d7ca2d8c61e4b9a63b2ee0f652ec78596e3c' => 
    array (
      0 => 'ui\\theme\\default\\autoload-pool.tpl',
      1 => 1445763424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270715ee9eb8253b734-84552173',
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
  'unifunc' => 'content_5ee9eb82579815_53071092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9eb82579815_53071092')) {function content_5ee9eb82579815_53071092($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_name'];?>
</option>
<?php } ?><?php }} ?>