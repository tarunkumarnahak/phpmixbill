<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 15:37:35
         compiled from "ui\theme\default\pppoe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263935ee9eb6737d174-11836633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e076330201711d62d4e2a5ce6365487ef03bbbf' => 
    array (
      0 => 'ui\\theme\\default\\pppoe.tpl',
      1 => 1446193966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263935ee9eb6737d174-11836633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee9eb6741d560_23523111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9eb6741d560_23523111')) {function content_5ee9eb6741d560_23523111($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Name'];?>
...">
												<div class="input-group-btn">
													<button class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-add" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New_Plan'];?>
</a>
										</div>&nbsp;
									</div>

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bandwidth_Plans'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Validity'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pool'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_bw'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['price'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['validity_unit'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
									<td>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-warning btn-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
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

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>