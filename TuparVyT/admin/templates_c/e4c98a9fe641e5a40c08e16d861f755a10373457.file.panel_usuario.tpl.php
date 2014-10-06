<?php /* Smarty version Smarty-3.1.14, created on 2014-10-06 23:14:16
         compiled from "./templates/panel_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1064539067543302acb4b266-21739163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c98a9fe641e5a40c08e16d861f755a10373457' => 
    array (
      0 => './templates/panel_usuario.tpl',
      1 => 1412630035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1064539067543302acb4b266-21739163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543302acbbc636_62982124',
  'variables' => 
  array (
    'Usuario' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543302acbbc636_62982124')) {function content_543302acbbc636_62982124($_smarty_tpl) {?>                        <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
                          <tr class="active danger">
                            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['mail'];?>
</td>                           
                            <td>
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value['es_admin']==1){?>
                              <p class="text-center"><span class=" glyphicon glyphicon-ok"></span>
                              </a></p>
                            <?php }else{ ?>  
                            <p class="text-center">
                            <a data-toggle="tooltip" data-placement="top" title="Cambie los previlegios de un usuario haciendo click aqui" style="cursor:pointer">
                            <span  onclick="PromoverUsuario(<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
);" class="glyphicon glyphicon-remove"></span>
                            </a></p>
                            <?php }?>
                            </td>  
                            <td>
                            <a data-toggle="tooltip" data-placement="top" title="Elimine un usuario haciendo click aqui" style="cursor:pointer"><span onclick="BorrarUsuario(<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
);" class="glyphicon glyphicon-trash"></span>
                            </a>
                            </td> 
                          </tr>
                          <?php } ?><?php }} ?>