<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 20:57:45
         compiled from "./templates/comentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:935602893542308c61e4914-32350852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c8bc7d70edfb520fa336f38cd61fe19ba5a240' => 
    array (
      0 => './templates/comentario.tpl',
      1 => 1411585059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '935602893542308c61e4914-32350852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542308c6238085_29690733',
  'variables' => 
  array (
    'Comentario' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542308c6238085_29690733')) {function content_542308c6238085_29690733($_smarty_tpl) {?>                  <!-- COMENTARIO-->

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


                  <form class="form-horizontal" ACTION="" METHOD="POST">        
                    <fieldset>                        
                      <div class="form-group">                          
                        <div class="col-lg-6">
                          <div class="jumbotron">
                            <label>Compartenos tu experiencia en esta ciudad...</label>
                            <textarea class="form-control" rows="5" type="text" name="texto" placeholder="Escriba su comentario..."></textarea><br>
                            <button type="submit" class="btn btn-success btn-md">Publicar</button>                            
                          </div>
                        </div>
                      </div>                      
                    </fieldset>
                  </form>
<?php }} ?>