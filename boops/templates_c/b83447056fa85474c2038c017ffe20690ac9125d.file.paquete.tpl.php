<?php /* Smarty version Smarty-3.1.14, created on 2014-08-28 20:51:04
         compiled from "./templates/paquete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117755223353ff3b36c05982-43955089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b83447056fa85474c2038c017ffe20690ac9125d' => 
    array (
      0 => './templates/paquete.tpl',
      1 => 1409251847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117755223353ff3b36c05982-43955089',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ff3b36c6f068_87619895',
  'variables' => 
  array (
    'Subcategoria' => 0,
    'i' => 0,
    'Paquete' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ff3b36c6f068_87619895')) {function content_53ff3b36c6f068_87619895($_smarty_tpl) {?><div>
   <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Subcategoria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
      <h1 ><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_categoria'];?>
</h1>
   <?php } ?>
</div></br></br></br>

<table class="table table-hover">
   <caption></caption>
   <thead>
      <tr>
         <th></th>
         <th><p align="center">Destino</p></th>
         <th><p align="center">Duracion</p></th>
         <th><p align="center">Precio</p></th>         
      </tr>
   </thead>
   <tbody>
   <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Paquete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
      <tr>
         <td><a href="ver_detalle.php"><i class="fa fa-search"></i></a>&nbsp&nbsp
             <a href="ver_detalle.php"><i class="fa fa-envelope"></i></a>
         </td>         
         <td><?php echo $_smarty_tpl->tpl_vars['j']->value['nombre_ciudad'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['j']->value['duracion'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['j']->value['precio'];?>
</td>
   <?php } ?>      
      </tr>
   </tbody>
</table>
<hr>
<?php }} ?>