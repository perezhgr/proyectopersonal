<?php /* Smarty version Smarty-3.1.14, created on 2014-08-24 21:26:55
         compiled from "./templates/obtenercategorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189960108453f8ef54a4c1c1-15918242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '670c8d2b61c6d3b47ea987879c2b2e43974bfd20' => 
    array (
      0 => './templates/obtenercategorias.tpl',
      1 => 1408908376,
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
    'Categorias' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f8ef54aca1f7_75059770')) {function content_53f8ef54aca1f7_75059770($_smarty_tpl) {?><div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
              <!--<a name="<?php echo $_smarty_tpl->tpl_vars['i']->value['id_seccion'];?>
"></a>!-->
              <h1 ><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_categoria'];?>
</h1></br></br>
              <p><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
<p></br></br>             	
            <?php } ?>
          </div>
        </div>
</div><?php }} ?>