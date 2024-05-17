<?php /* Smarty version Smarty-3.1.19, created on 2024-05-17 22:07:02
         compiled from "/var/www/html/modules/blockuserinfo/nav-xs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18327537886647b8e6b2fe93-94360912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf68675e100bc333e4137c819f31430eeda84d52' => 
    array (
      0 => '/var/www/html/modules/blockuserinfo/nav-xs.tpl',
      1 => 1715976259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18327537886647b8e6b2fe93-94360912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6647b8e6b34f06_70429437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6647b8e6b34f06_70429437')) {function content_6647b8e6b34f06_70429437($_smarty_tpl) {?><ul class="nav nav-pills nav-stacked visible-xs wk-nav-style">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my orders','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Booking History','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Accounts Settings','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
"  title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign Out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
	<?php } else { ?>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
	<?php }?>
</ul><?php }} ?>
