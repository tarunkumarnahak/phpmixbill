<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 17:06:07
         compiled from "ui\theme\default\reports-period.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92525ee9eb0fd87ea9-01606234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd0ee032f8debedc2ca9a3d177e80277ffc41dbb' => 
    array (
      0 => 'ui\\theme\\default\\reports-period.tpl',
      1 => 1446108721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92525ee9eb0fd87ea9-01606234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'tdate' => 0,
    'mdate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee9eb0fde4fe0_56366540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9eb0fde4fe0_56366540')) {function content_5ee9eb0fde4fe0_56366540($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Period_Reports'];?>
</div>
								<div class="panel-body">
								<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/period-view"> 
									<div class="form-group">
										<label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['From_Date'];?>
</label>
										<div class="col-md-9">
											<div class="input-group date" id="datepicker1">
												<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
" name="fdate" id="fdate">
												<span class="input-group-addon ion ion-calendar"></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To_Date'];?>
</label>
										<div class="col-md-9">
											<div class="input-group date" id="datepicker2">
												<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
" name="tdate" id="tdate">
												<span class="input-group-addon ion ion-calendar"></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
										<div class="col-md-9">
											<select class="form-control" id="stype" name="stype">
												<option value="" selected=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions'];?>
</option>
												<option value="Hotspot">Hotspot</option>
												<option value="PPPOE">PPPOE</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Period_Reports'];?>
</button>
										</div>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>