<?php /* Smarty version Smarty-3.1.14, created on 2014-09-01 23:06:58
         compiled from "./templates/lugaresdestacados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2011454730540221296081e3-03629007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd97d9d3ddbf019d56b995e8ae58db346587a40b' => 
    array (
      0 => './templates/lugaresdestacados.tpl',
      1 => 1409605598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2011454730540221296081e3-03629007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5402212967a767_17760556',
  'variables' => 
  array (
    'Subcategorias' => 0,
    'i' => 0,
    'Lgdestacados' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5402212967a767_17760556')) {function content_5402212967a767_17760556($_smarty_tpl) {?><!-- Subcategoria-->
<div class="row">
  <div class="col-md-12" role="main">
    <div class="bs-docs-section">
      <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Subcategorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
      <h1 ><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_categoria'];?>
</h1></br></br>
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
<h4></br></br>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
<!-- Fin Subcategoria-->

<!-- Ciudades destacadas-->
  <div class="row">
    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Lgdestacados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
    <div class="col-md-4">
      <img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['j']->value['path'];?>
" alt="" style="width: 140px; height: 140px;">
      <h3><?php echo $_smarty_tpl->tpl_vars['j']->value['nombre_ciudad'];?>
</h3>
      <a class="btn btn-default" role="button">Ver detalle</a>
      <button type="button" class="btn btn-info" data-toggle="modal" 
      data-target="#myModal">
      <i class="fa fa-angle-double-right fa-2x"></i>
    </button></br></br></br></br>                                
  </div>
<!-- Fin-->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
      <h4 class="modal-title negro" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['j']->value['nombre_ciudad'];?>
</h4>
    </div>
    <div class="modal-body negro">
      <h5 class="text-left">Duracion:<?php echo $_smarty_tpl->tpl_vars['j']->value['duracion'];?>
</h5>
      <h5 class="text-left">Precio:<?php echo $_smarty_tpl->tpl_vars['j']->value['precio'];?>
</h5>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary">Guardar Cambios</button>
    </div>
  </div>
</div>

</div>
<?php } ?>
<!-- Fin modal --><?php }} ?>