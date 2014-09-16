<?php /* Smarty version Smarty-3.1.14, created on 2014-09-15 22:31:00
         compiled from "./templates/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:679203685416f2983945f4-03744400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afbabd2d7104bba99deb709b2f3809e75b1e519' => 
    array (
      0 => './templates/modal.tpl',
      1 => 1410813047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '679203685416f2983945f4-03744400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5416f2983f57f9_93866687',
  'variables' => 
  array (
    'Ciudad' => 0,
    'ciudad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416f2983f57f9_93866687')) {function content_5416f2983f57f9_93866687($_smarty_tpl) {?>            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
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
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div><?php }} ?>