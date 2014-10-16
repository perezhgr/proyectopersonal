<?php /* Smarty version Smarty-3.1.14, created on 2014-10-09 21:04:45
         compiled from "./templates/alerta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19248018875436db0070fcf7-74473025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb4f8cafc616bd0935f2f898523f2f4519150461' => 
    array (
      0 => './templates/alerta.tpl',
      1 => 1412881464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19248018875436db0070fcf7-74473025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5436db008832a3_58834662',
  'variables' => 
  array (
    'Error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5436db008832a3_58834662')) {function content_5436db008832a3_58834662($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-lg-2 alert alert-success fade in margenb" id="alerta">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?php echo $_smarty_tpl->tpl_vars['Error']->value;?>

		</div>
	</div>
</div> 
<?php }} ?>