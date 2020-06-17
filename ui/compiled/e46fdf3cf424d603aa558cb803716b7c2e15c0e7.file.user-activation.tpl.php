<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 15:47:41
         compiled from "ui\theme\default\user-activation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75885ee9edc5bea228-30683860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e46fdf3cf424d603aa558cb803716b7c2e15c0e7' => 
    array (
      0 => 'ui\\theme\\default\\user-activation.tpl',
      1 => 1446188978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75885ee9edc5bea228-30683860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee9edc5c38673_99051284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9edc5c38673_99051284')) {function content_5ee9edc5c38673_99051284($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation-post" >
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code_Voucher'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="code" name="code" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Enter_Voucher_Code'];?>
">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</button> 
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>