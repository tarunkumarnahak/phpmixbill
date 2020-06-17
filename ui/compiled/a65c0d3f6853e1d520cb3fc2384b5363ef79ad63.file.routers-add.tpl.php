<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 16:58:36
         compiled from "ui\theme\default\routers-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319695ee9e94cea5b45-34130877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a65c0d3f6853e1d520cb3fc2384b5363ef79ad63' => 
    array (
      0 => 'ui\\theme\\default\\routers-add.tpl',
      1 => 1444460543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319695ee9e94cea5b45-34130877',
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
  'unifunc' => 'content_5ee9e94cf0a180_83400799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9e94cf0a180_83400799')) {function content_5ee9e94cf0a180_83400799($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Router'];?>
</div>
						<div class="panel-body">
						
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/add-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Name'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="name" name="name">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP_Address'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="ip_address" name="ip_address">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="username" name="username">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Secret'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="password" name="password">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
						<div class="col-md-6">
							<textarea class="form-control" id="description" name="description"></textarea>
						</div>
                    </div>
					

					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
							Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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