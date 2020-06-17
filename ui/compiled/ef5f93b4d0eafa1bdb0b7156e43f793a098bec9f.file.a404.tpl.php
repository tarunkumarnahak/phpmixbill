<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 15:37:04
         compiled from "ui\theme\default\a404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95555ee9eb48c5b588-07125164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef5f93b4d0eafa1bdb0b7156e43f793a098bec9f' => 
    array (
      0 => 'ui\\theme\\default\\a404.tpl',
      1 => 1446191500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95555ee9eb48c5b588-07125164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee9eb48c9e9d8_41135911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9eb48c9e9d8_41135911')) {function content_5ee9eb48c9e9d8_41135911($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<div class="page page-err clearfix">
				<div class="err-container">
					<h1 class="m404 mb0">404 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="ion ion-forward" title="go to dashboard"></a></h1>
					<p class="text-desc mb20">Coming Soon!! Next Version...</p>
				</div>
			</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>