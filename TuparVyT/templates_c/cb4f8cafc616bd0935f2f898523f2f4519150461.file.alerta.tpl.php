<?php /* Smarty version Smarty-3.1.14, created on 2014-11-07 16:18:58
         compiled from "./templates/alerta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279369063545ccdbd267cd1-94349475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb4f8cafc616bd0935f2f898523f2f4519150461' => 
    array (
      0 => './templates/alerta.tpl',
      1 => 1415373517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279369063545ccdbd267cd1-94349475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545ccdbd5899d5_35490897',
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ccdbd5899d5_35490897')) {function content_545ccdbd5899d5_35490897($_smarty_tpl) {?><script type="text/javascript">
			var root = <?php echo $_smarty_tpl->tpl_vars['root']->value;?>
;
		</script>

<script type="text/javascript">
$(document).ready(function() {
	
	$('#iniciar').submit(function(){	
			var lala = {$mensaje};
			alert(lala);
			return false;  

	});
});
</script>

<?php }} ?>