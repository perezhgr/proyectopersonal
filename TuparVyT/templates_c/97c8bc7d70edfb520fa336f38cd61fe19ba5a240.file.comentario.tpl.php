<?php /* Smarty version Smarty-3.1.14, created on 2014-10-25 23:00:35
         compiled from "./templates/comentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1517202957542b255766ba76-28728710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c8bc7d70edfb520fa336f38cd61fe19ba5a240' => 
    array (
      0 => './templates/comentario.tpl',
      1 => 1414270821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1517202957542b255766ba76-28728710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542b25577170a3_99465041',
  'variables' => 
  array (
    'Nombre' => 0,
    'Condicion' => 0,
    'condicion' => 0,
    'IdCiudad' => 0,
    'idciudad' => 0,
    'IdUsuario' => 0,
    'Contador' => 0,
    'comentario' => 0,
    'Comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b25577170a3_99465041')) {function content_542b25577170a3_99465041($_smarty_tpl) {?>                  <?php if (isset($_smarty_tpl->tpl_vars['Nombre']->value)){?>
                  <!-- FORM COMENTARIO-->
                  <form id="formcrearcomentario" class="form-horizontal" method="POST">        
                    <div class="jumbotron">
                      <h4>Deja tu comentario</h4><br>
                      <div class="form-group">
                        <div class="col-lg-6"><label>Escriba su comentario</label>
                          <textarea class="form-control" rows="3" type="text" name="texto" placeholder="Comentario..." required></textarea></div>
                          <div class="col-lg-6">
                           <label>Elija su condicion de turista</label><br>
                           <select  class="form-control" name="id_condicion">
                             <?php  $_smarty_tpl->tpl_vars['condicion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['condicion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Condicion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['condicion']->key => $_smarty_tpl->tpl_vars['condicion']->value){
$_smarty_tpl->tpl_vars['condicion']->_loop = true;
?>
                             <option value="<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
"><?php echo $_smarty_tpl->tpl_vars['condicion']->value['condicion'];?>
</option>
                             <?php } ?>
                           </select><br> 
                         </div>
                         <?php  $_smarty_tpl->tpl_vars['idciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['idciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['IdCiudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['idciudad']->key => $_smarty_tpl->tpl_vars['idciudad']->value){
$_smarty_tpl->tpl_vars['idciudad']->_loop = true;
?>
                         <div class="col-lg-6">
                          <button type="submit" onclick="ActualizarContadorComentario(<?php echo $_smarty_tpl->tpl_vars['idciudad']->value['id_ciudad'];?>
);" class="btn btn-primary btn-sm btn-block">
                            <i class="fa fa-paper-plane"></i></button>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-6">
                            <input type="hidden" class="form-control" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['IdUsuario']->value;?>
" required></div>
                            <div class="col-lg-6">
                              
                              <input type="hidden" class="form-control" name="id_ciudad" value="<?php echo $_smarty_tpl->tpl_vars['idciudad']->value['id_ciudad'];?>
" required>
                              <?php } ?>                       
                            </div>
                          </div>  
                        </div>
                      </form>
                      <?php }?>
                      <!-- FIN FORM COMENTARIO-->

                      <script type="text/javascript">
                        $("#formcrearcomentario").submit(function() 
                        {
                          $.ajax({
                            url: "GrabarComentario.php",
                            type: "POST",
                            data:$("#formcrearcomentario").serialize(), 
                            success: function(data)
                            {

                              $('#comentario').html(data);                      
                            }

                          });
                          return false;
                        });
                        
                        //Actualiza el contador de comentarios.
                        function ActualizarContadorComentario(ciudad){
                          $.ajax({
                            type: "GET",
                            url: "ActualizarContadorComentario.php?id_ciudad="+ciudad,
                            success: function(data)
                            {
                              $('#contadoractualizado').html(data);
                            }
                          });
                          return false;
                        }

                      </script>

                      <!-- LISTADO DE COMENTARIOS-->
                      <nav class="navbar navbar-default" role="navigation"> 
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <div id="contadoractualizado">
                          <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Contador']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
                        <h4>Comentarios&nbsp;&nbsp;
                            <span class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['comentario']->value['countcoment'];?>
</span>
                          </div>
                        </h4>
                        <?php } ?>
                        </div>
                      </nav>

                      <div class="scroll-area" data-spy="scroll" data-offset="0">

                        <address id="comentario">
                        </address>
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

                        <hr>
                      </div>
                      <!-- LISTADO DE COMENTARIOS-->






<?php }} ?>