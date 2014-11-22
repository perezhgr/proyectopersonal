<?php /* Smarty version Smarty-3.1.14, created on 2014-11-22 15:05:55
         compiled from "./templates/panel_comentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11735835045432faadae0268-40191566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01a7882e1d27c43f7de8fac483aaf7202198b9e' => 
    array (
      0 => './templates/panel_comentario.tpl',
      1 => 1416665107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11735835045432faadae0268-40191566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5432faadb3a7b0_41674845',
  'variables' => 
  array (
    'Testimonio' => 0,
    'testimonio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5432faadb3a7b0_41674845')) {function content_5432faadb3a7b0_41674845($_smarty_tpl) {?>            <?php  $_smarty_tpl->tpl_vars['testimonio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Testimonio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['testimonio']->key => $_smarty_tpl->tpl_vars['testimonio']->value){
$_smarty_tpl->tpl_vars['testimonio']->_loop = true;
?>
                  <tr class="active danger">
                    <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['id_comentario'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['nombre'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['condicion'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['texto'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['nombre_ciudad'];?>
</td>
                    <td>
                      <a data-toggle="tooltip" data-placement="top" title="Elimine un comentario haciendo click aqui" style="cursor:pointer"><span onclick="BorrarComentario(<?php echo $_smarty_tpl->tpl_vars['testimonio']->value['id_comentario'];?>
);" class="glyphicon glyphicon-trash"></span>
                      </a>
                    </td>
                  </tr>
              <?php } ?><?php }} ?>