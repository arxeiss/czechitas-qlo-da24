<?php /* Smarty version Smarty-3.1.19, created on 2024-05-17 22:07:02
         compiled from "/var/www/html/modules/hotelreservationsystem/views/templates/hook/headerHotelDescBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6414407016647b8e6e85c74-00771367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3df8a55303f6ec9aeba28685997f4e031248933' => 
    array (
      0 => '/var/www/html/modules/hotelreservationsystem/views/templates/hook/headerHotelDescBlock.tpl',
      1 => 1715976259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6414407016647b8e6e85c74-00771367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_CHAIN_NAME' => 0,
    'WK_HTL_TAG_LINE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6647b8e6e89f95_49580203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6647b8e6e89f95_49580203')) {function content_6647b8e6e89f95_49580203($_smarty_tpl) {?>

<div class="header-desc-container">
	<div class="header-desc-wrapper">
		<div class="header-desc-primary">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
						<p class="header-desc-welcome"><?php echo smartyTranslate(array('s'=>'Welcome To','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
						<hr class="heasder-desc-hr-first"/>
						<div class="header-desc-inner-wrapper">
							<h1 class="header-hotel-name"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
							<p class="header-hotel-desc"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['WK_HTL_TAG_LINE']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							<hr class="heasder-desc-hr-second"/>
						</div>
					</div>
				</div>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAfterHeaderHotelDesc"),$_smarty_tpl);?>

			</div>
		</div>
	</div>
</div><?php }} ?>
