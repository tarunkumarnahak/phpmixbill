<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 17:03:04
         compiled from "ui\theme\default\recharge-user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120205ee9ea58927091-02303958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7d465f6874606335ace2c5142a4fd1b1abf5f2' => 
    array (
      0 => 'ui\\theme\\default\\recharge-user.tpl',
      1 => 1445791026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120205ee9ea58927091-02303958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'c' => 0,
    'id' => 0,
    'cs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee9ea589b0796_14621528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9ea589b0796_14621528')) {function content_5ee9ea589b0796_14621528($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge-post" >            
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Account'];?>
</label>
								<div class="col-md-6">
									<select id="personSelect" name="id_customer" style="width: 100%" data-placeholder="Select a customer...">
									<option></option>
										<?php  $_smarty_tpl->tpl_vars['cs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->key => $_smarty_tpl->tpl_vars['cs']->value){
$_smarty_tpl->tpl_vars['cs']->_loop = true;
?>
											<?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['cs']->value['id']){?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['cs']->value['username'];?>
</option>
											<?php }else{ ?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cs']->value['username'];?>
</option>
											<?php }?>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
								<div class="col-md-6">
									<input type="radio" id="Hot" name="type" value="Hotspot"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Hotspot_Plans'];?>
 
									<input type="radio" id="POE" name="type" value="PPPOE"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
 
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</label>
								<div class="col-md-6">
									<select id="server" name="server" class="form-control">
										<option value=''>Select Routers</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service_Plan'];?>
</label>
								<div class="col-md-6">
									<select id="plan" name="plan" class="form-control">
										<option value=''>Select Plans</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</button> 
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>