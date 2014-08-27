<?php /* Smarty version Smarty-3.1.14, created on 2014-08-26 20:53:04
         compiled from "./templates/obtenercategorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189960108453f8ef54a4c1c1-15918242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '670c8d2b61c6d3b47ea987879c2b2e43974bfd20' => 
    array (
      0 => './templates/obtenercategorias.tpl',
      1 => 1409079176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189960108453f8ef54a4c1c1-15918242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f8ef54aca1f7_75059770',
  'variables' => 
  array (
    'Subcategorias' => 0,
    'i' => 0,
    'Contenido' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f8ef54aca1f7_75059770')) {function content_53f8ef54aca1f7_75059770($_smarty_tpl) {?><div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Subcategorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
              <!--<a name="<?php echo $_smarty_tpl->tpl_vars['i']->value['id_seccion'];?>
"></a>!-->
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
<div class="row">
          <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Contenido']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
          <div class="col-md-4">
              <img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['j']->value['path'];?>
" alt="" style="width: 140px; height: 140px;">
              <h3><?php echo $_smarty_tpl->tpl_vars['j']->value['nombre_ciudad'];?>
</h3>
              <!--<p>Aca va a ir la descripcion</p>-->
              <p><a class="btn btn-default" href="#" role="button">Ver detalles&raquo;</a></p></br></br></br>
          </div>
          <?php } ?>                  
</div>

<?php }} ?>