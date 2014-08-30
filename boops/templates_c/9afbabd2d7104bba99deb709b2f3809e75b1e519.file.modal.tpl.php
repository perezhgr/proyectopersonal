<?php /* Smarty version Smarty-3.1.14, created on 2014-08-30 21:08:25
         compiled from "./templates/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3556920265402212967fbc7-64360951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afbabd2d7104bba99deb709b2f3809e75b1e519' => 
    array (
      0 => './templates/modal.tpl',
      1 => 1409425607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3556920265402212967fbc7-64360951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Detalle' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54022129696547_80751375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54022129696547_80751375')) {function content_54022129696547_80751375($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Detalle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
      <h4 class="modal-title negro" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_ciudad'];?>
</h4>
    </div>
    <div class="modal-body negro">
      <h5 class="text-left"><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</h5>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary">Guardar Cambios</button>
    </div>
  </div>
</div>
<?php } ?>


</div>
<!-- Fin modal --><?php }} ?>