<?php /* Smarty version Smarty-3.1.19, created on 2024-05-17 22:07:02
         compiled from "/var/www/html/modules/blocknavigationmenu/views/templates/hook/wkFooterNavigationBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5004425186647b8e6db6632-03375015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0388ffa9465b4340d5a26f301b33f91ea7f1165e' => 
    array (
      0 => '/var/www/html/modules/blocknavigationmenu/views/templates/hook/wkFooterNavigationBlock.tpl',
      1 => 1715976259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5004425186647b8e6db6632-03375015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation_links' => 0,
    'navigationLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6647b8e6dbade2_96289927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6647b8e6dbade2_96289927')) {function content_6647b8e6dbade2_96289927($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['navigation_links']->value)&&$_smarty_tpl->tpl_vars['navigation_links']->value) {?>
	<div class="col-sm-3">
		<div class="row">
			<section class="col-xs-12 col-sm-12">
				<div class="row margin-lr-0 footer-section-heading">
					<p><?php echo smartyTranslate(array('s'=>'Explore','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</p>
					<hr/>
				</div>
				<div class="row margin-lr-0">
					<ul class="footer-navigation-section">
					<?php  $_smarty_tpl->tpl_vars['navigationLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navigationLink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navigationLink']->key => $_smarty_tpl->tpl_vars['navigationLink']->value) {
$_smarty_tpl->tpl_vars['navigationLink']->_loop = true;
?>
						<li class="item">
							<a title="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
</a>
						</li>
					<?php } ?>
					</ul>
				</div>
			</section>
		</div>
	</div>
<?php }?>




<?php }} ?>
