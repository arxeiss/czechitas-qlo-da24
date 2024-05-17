<?php /* Smarty version Smarty-3.1.19, created on 2024-05-17 20:04:39
         compiled from "/var/www/html/admin/themes/default/template/controllers/orders/_room_extra_demands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20657784196647b8574cbec3-18489341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae5769861689df61a2c4567e926006fdf4f2c5c9' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/orders/_room_extra_demands.tpl',
      1 => 1715976259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20657784196647b8574cbec3-18489341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderEdit' => 0,
    'extraDemands' => 0,
    'roomDemand' => 0,
    'demand' => 0,
    'orderCurrency' => 0,
    'roomTypeDemands' => 0,
    'idGlobalDemand' => 0,
    'idOption' => 0,
    'option' => 0,
    'demand_key' => 0,
    'selected_adv_option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6647b8574e50e2_72686396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6647b8574e50e2_72686396')) {function content_6647b8574e50e2_72686396($_smarty_tpl) {?><div class="modal-header">
	<h3 class="modal-title"><i class="icon-tasks"></i> <?php echo smartyTranslate(array('s'=>'Additional Facilities'),$_smarty_tpl);?>
 <?php if (isset($_smarty_tpl->tpl_vars['orderEdit']->value)&&$_smarty_tpl->tpl_vars['orderEdit']->value) {?><span class="badge badge-success demand_edit_badge"><?php echo smartyTranslate(array('s'=>'edit'),$_smarty_tpl);?>
</span><?php }?> <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</h3>
</div>
<div class="modal-body" id="rooms_extra_demands">
	<div id="room_type_demands_desc" class="row">
		<input type="hidden" value="0" id="id_htl_booking">
		<?php if (isset($_smarty_tpl->tpl_vars['orderEdit']->value)&&$_smarty_tpl->tpl_vars['orderEdit']->value) {?>
			<p class="col-sm-12 facility_nav_btn">
				<button id="btn_new_room_facility" class="btn btn-success"><i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add new facility'),$_smarty_tpl);?>
</button>
				<button id="back_to_facilities_btn" class="btn btn-default"><i class="icon-arrow-left"></i> <?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</button>
			</p>

			
			<div class="col-sm-12 room_ordered_demands table-responsive">
				<table class="table">
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['extraDemands']->value)&&$_smarty_tpl->tpl_vars['extraDemands']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['roomDemand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roomDemand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extraDemands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->key => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->_loop = true;
?>
								<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['demand']->value['name'];?>
</td>
										<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['demand']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</td>
										<td><a class="btn btn-danger pull-right del-order-room-demand" href="#" id_booking_demand="<?php echo $_smarty_tpl->tpl_vars['demand']->value['id_booking_demand'];?>
"><i class="icon-trash"></i></a></td>
									</tr>
								<?php } ?>
							<?php } ?>
						<?php } else { ?>
							<tr>
								<td colspan="3">
									<i class="icon-warning"></i> <?php echo smartyTranslate(array('s'=>'No additional facilities added yet.'),$_smarty_tpl);?>

								</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>

			
			<div class="col-sm-12 room_demands_container">
				<div class="room_demand_detail">
					<?php if (isset($_smarty_tpl->tpl_vars['roomTypeDemands']->value)&&$_smarty_tpl->tpl_vars['roomTypeDemands']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_smarty_tpl->tpl_vars['idGlobalDemand'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['roomTypeDemands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
 $_smarty_tpl->tpl_vars['idGlobalDemand']->value = $_smarty_tpl->tpl_vars['demand']->key;
?>
							<div class="row room_demand_block">
								<div class="col-xs-6">
									<div class="row">
										<div class="col-xs-2">
											<input id_cart_booking="<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idGlobalDemand']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="id_room_type_demand" <?php if (isset($_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands'])&&$_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands']&&(in_array($_smarty_tpl->tpl_vars['idGlobalDemand']->value,$_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands']))) {?>checked<?php }?> />
										</div>
										<div class="col-xs-10 demand_adv_option_block">
											<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
											<?php if (isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])&&$_smarty_tpl->tpl_vars['demand']->value['adv_option']) {?>
												<select class="id_option">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['idOption'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['demand']->value['adv_option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['idOption']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
														<?php $_smarty_tpl->tpl_vars['demand_key'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['idGlobalDemand']->value)."-".((string)$_smarty_tpl->tpl_vars['idOption']->value), null, 0);?>
														<option optionPrice="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idOption']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'][$_smarty_tpl->tpl_vars['demand_key']->value])) {?>selected<?php }?> key="<?php echo $_smarty_tpl->tpl_vars['demand_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
														<?php if (isset($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'][$_smarty_tpl->tpl_vars['demand_key']->value])) {?>
															<?php $_smarty_tpl->tpl_vars['selected_adv_option'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['idOption']->value), null, 0);?>
														<?php }?>
													<?php } ?>
												</select>
											<?php } else { ?>
												<input type="hidden" class="id_option" value="0" />
											<?php }?>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<p><span class="pull-right extra_demand_option_price"><?php if (isset($_smarty_tpl->tpl_vars['selected_adv_option']->value)&&isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
<?php }?></span></p>
								</div>
							</div>
						<?php } ?>
					<?php }?>
				</div>
			</div>
		<?php } elseif (isset($_smarty_tpl->tpl_vars['extraDemands']->value)&&$_smarty_tpl->tpl_vars['extraDemands']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['roomDemand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roomDemand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extraDemands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->key => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->_loop = true;
?>
				<div class="col-sm-12">
					<div class="col-sm-12 room_demand_detail">
						<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
?>
							<p>
								<span><?php echo $_smarty_tpl->tpl_vars['demand']->value['name'];?>
</span>
								<span class="pull-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['demand']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</span>
							</p>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		<?php }?>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary pull-left" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close'),$_smarty_tpl);?>
</button>
	<button type="button" id="save_room_facilities" class="btn btn-success pull-right"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
</div>




<style type="text/css">
	/*Extra demands CSS*/
	#rooms_type_extra_demands .modal-title {
		margin: 0px;}
	#rooms_type_extra_demands .demand_edit_badge {
		font-size: 14px;}
	#rooms_extra_demands .room_ordered_demands td, #rooms_extra_demands .room_demand_detail {
		font-size: 14px;}
	#rooms_extra_demands .demand_header {
		padding: 10px;
		color: #333;
    	border-bottom: 1px solid #ddd;}
	#rooms_extra_demands .room_demand_block {
		margin-bottom: 15px;
		color: #333;
		font-size: 14px;}
	#rooms_extra_demands .facility_nav_btn {
		margin-bottom: 20px;}
	#rooms_extra_demands .room_demands_container {
		display: none;}
	#room_extra_demand_content #save_room_facilities, #room_extra_demand_content #back_to_facilities_btn {
		display: none;}
</style>

<?php }} ?>
