<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 15:47:51
         compiled from "ui\theme\default\user-activation-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46405ee9edcf7f9024-17289984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad67bab4482f159e50351b3c3393d6e00b922e10' => 
    array (
      0 => 'ui\\theme\\default\\user-activation-list.tpl',
      1 => 1446189007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46405ee9edcf7f9024-17289984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'd' => 0,
    'ds' => 0,
    '_c' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee9edcf87c3c0_04985101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9edcf87c3c0_04985101')) {function content_5ee9edcf87c3c0_04985101($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


					<div class="row">
						<div class="col-sm-12">
							<div class="panel mb20 panel-hovered panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Activated_Voucher'];?>
</div>
								<div class="panel-body">

									<table id="datatable" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
											</tr>
										</thead>
										<tbody>
										<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['plan_name'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
												<td class="text-success"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['ds']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time'];?>
</td>
												<td class="text-danger"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['ds']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['method'];?>
</td>
											</tr>
										<?php } ?>
										</tbody>
									</table>
									<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

								</div>
							</div>
						</div>
					</div>


<?php echo $_smarty_tpl->getSubTemplate ("sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>