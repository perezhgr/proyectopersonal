<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 14:24:37
         compiled from "./templates/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185600833554220ee6b8dab1-54559864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afbabd2d7104bba99deb709b2f3809e75b1e519' => 
    array (
      0 => './templates/modal.tpl',
      1 => 1411561469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185600833554220ee6b8dab1-54559864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54220ee6c30b03_31248837',
  'variables' => 
  array (
    'Ciudad' => 0,
    'ciudad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54220ee6c30b03_31248837')) {function content_54220ee6c30b03_31248837($_smarty_tpl) {?>                    <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
                    <div class="col-sm- text-center">
                      <p>Lugar:<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</p><br>
                      <p>Precio:<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
</p><br>
                      <p>Duracion:<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['duracion'];?>
</p><br>
                    </div>
                    <?php } ?>
                    

<?php }} ?>