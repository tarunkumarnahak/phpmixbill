<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 15:47:18
         compiled from "ui\theme\default\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256555ee9edaee9e827-47465088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed13823868022eb3b70f22f5160ba8c4fca9d8ee' => 
    array (
      0 => 'ui\\theme\\default\\404.tpl',
      1 => 1446191510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256555ee9edaee9e827-47465088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee9edaef036b1_09956382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9edaef036b1_09956382')) {function content_5ee9edaef036b1_09956382($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<div class="page page-err clearfix">
				<div class="err-container">
					<h1 class="m404 mb0">404 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home" class="ion ion-forward" title="go to dashboard"></a></h1>
					<p class="text-desc mb20">Coming Soon!! Next Version...</p>
				</div>
			</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>