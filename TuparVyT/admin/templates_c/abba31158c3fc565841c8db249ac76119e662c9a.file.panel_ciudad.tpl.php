<?php /* Smarty version Smarty-3.1.14, created on 2014-10-30 14:48:38
         compiled from "./templates/panel_ciudad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:736118182542bf573e8aa00-83581060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abba31158c3fc565841c8db249ac76119e662c9a' => 
    array (
      0 => './templates/panel_ciudad.tpl',
      1 => 1414177725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '736118182542bf573e8aa00-83581060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542bf573eee422_52575388',
  'variables' => 
  array (
    'Ciudad' => 0,
    'ciudad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542bf573eee422_52575388')) {function content_542bf573eee422_52575388($_smarty_tpl) {?>                <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
                  <tr class="active danger">
                    <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['duracion'];?>
</td>
                    <td>$&nbsp;<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
</td>
                    <td>
                      <a href="AM_ciudad.php?id_ciudad=<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                      </a>

                      <a data-toggle="tooltip" data-placement="top" title="Para eliminar una ciudad haga click en el icono" style="cursor:pointer">
                        <span  onclick="BorrarCiudad(<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
);"
                               class=" glyphicon glyphicon-trash ">
                        </span>
                      </a><br>
                    </td>
                  </tr>
                  <?php } ?><?php }} ?>