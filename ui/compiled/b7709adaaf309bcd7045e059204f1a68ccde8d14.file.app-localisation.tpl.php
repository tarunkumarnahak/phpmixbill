<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 17:06:25
         compiled from "ui\theme\default\app-localisation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44185ee9eb21991db6-83060926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7709adaaf309bcd7045e059204f1a68ccde8d14' => 
    array (
      0 => 'ui\\theme\\default\\app-localisation.tpl',
      1 => 1446207653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44185ee9eb21991db6-83060926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'tlist' => 0,
    'value' => 0,
    '_c' => 0,
    'label' => 0,
    'lan' => 0,
    'lans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee9eb21ac3124_46750615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9eb21ac3124_46750615')) {function content_5ee9eb21ac3124_46750615($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</div>
						<div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation-post" >
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Timezone'];?>
</label>
						<div class="col-md-6">
							<select name="tzone" id="tzone" class="form-control">
								<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_c']->value['timezone']==$_smarty_tpl->tpl_vars['value']->value){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
								<?php } ?>
							</select>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date_Format'];?>
</label>
						<div class="col-md-6">
							<select class="form-control" name="date_format" id="date_format">
								<option value="d/m/Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format']=='d/m/Y'){?> selected="selected" <?php }?>><?php echo date('d/m/Y');?>
</option>
								<option value="d.m.Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format']=='d.m.Y'){?> selected="selected" <?php }?>><?php echo date('d.m.Y');?>
</option>
								<option value="d-m-Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format']=='d-m-Y'){?> selected="selected" <?php }?>><?php echo date('d-m-Y');?>
</option>
								<option value="m/d/Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format']=='m/d/Y'){?> selected="selected" <?php }?>><?php echo date('m/d/Y');?>
</option>
								<option value="Y/m/d" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format']=='Y/m/d'){?> selected="selected" <?php }?>><?php echo date('Y/m/d');?>
</option>
								<option value="Y-m-d" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format']=='Y-m-d'){?> selected="selected" <?php }?>><?php echo date('Y-m-d');?>
</option>
								<option value="M d Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format']=='M d Y'){?> selected="selected" <?php }?>><?php echo date('M d Y');?>
</option>
								<option value="d M Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format']=='d M Y'){?> selected="selected" <?php }?>><?php echo date('d M Y');?>
</option>
								<option value="jS M y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format']=='jS M y'){?> selected="selected" <?php }?>><?php echo date('jS M y');?>
</option>
							</select>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Default_Language'];?>
</label>
						<div class="col-md-4">
							<select class="form-control" name="lan" id="lan">
								<?php  $_smarty_tpl->tpl_vars['lans'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lans']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lans']->key => $_smarty_tpl->tpl_vars['lans']->value){
$_smarty_tpl->tpl_vars['lans']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['lans']->value['folder'];?>
" <?php if ($_smarty_tpl->tpl_vars['_c']->value['language']==$_smarty_tpl->tpl_vars['lans']->value['folder']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lans']->value['name'];?>
</option>
                                <?php } ?>
							</select>
						</div>
						<div class="col-md-2">
							<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/language" type="button" class="btn btn-line-success btn-icon-inline"><i class="ion ion-android-add"></i><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Language'];?>
</a>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Decimal_Point'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="dec_point" name="dec_point" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Thousands_Separator'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="thousands_sep" name="thousands_sep" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency_Code'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="currency_code" name="currency_code" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
">
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['currency_help'];?>
</span>
						</div>
                    </div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
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