<?php /* Smarty version Smarty-3.1.14, created on 2014-09-30 23:49:11
         compiled from "./templates/comentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1517202957542b255766ba76-28728710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c8bc7d70edfb520fa336f38cd61fe19ba5a240' => 
    array (
      0 => './templates/comentario.tpl',
      1 => 1411653923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1517202957542b255766ba76-28728710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Comentario' => 0,
    'comentario' => 0,
    'Condicion' => 0,
    'condicion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542b25577170a3_99465041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b25577170a3_99465041')) {function content_542b25577170a3_99465041($_smarty_tpl) {?>                  <!-- COMENTARIO-->
                  <address>
                    <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Comentario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
                    <div class="jumbotron text-left"><strong><?php echo $_smarty_tpl->tpl_vars['comentario']->value['nombre'];?>
 (<?php echo $_smarty_tpl->tpl_vars['comentario']->value['condicion'];?>
)</strong> dijo:<br>
                      •&nbsp;<em><?php echo $_smarty_tpl->tpl_vars['comentario']->value['texto'];?>
</em>
                    </div><br>
                    <?php } ?>
                  </address>

                  <!-- COMENTARIO
                  <form class="form-horizontal" ACTION="" METHOD="POST">        
                    <div class="jumbotron">
                    <h4>Deja tu comentario</h4><br>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                        <label>Elija su condicion de turista</label><br>
                         <select  class="form-control">
                         <?php  $_smarty_tpl->tpl_vars['condicion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['condicion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Condicion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['condicion']->key => $_smarty_tpl->tpl_vars['condicion']->value){
$_smarty_tpl->tpl_vars['condicion']->_loop = true;
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
"><?php echo $_smarty_tpl->tpl_vars['condicion']->value['condicion'];?>
</option>
                          <?php } ?>
                        </select> 
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                        <label>Escriba su comentario</label>
                          <textarea class="form-control" rows="5" type="text" name="texto" placeholder="Comentario..." required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                        <label>Id city</label>
                          <input type="text" class="form-control" name="" value="<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_ciudad'];?>
" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                          <button type="submit" class="btn btn-success btn-md">Publicar</button>                            
                        </div>
                      </div>
                    
                    </div>
                  </form>!-->
<?php }} ?>