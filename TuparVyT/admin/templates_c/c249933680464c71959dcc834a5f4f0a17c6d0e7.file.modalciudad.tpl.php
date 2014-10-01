<?php /* Smarty version Smarty-3.1.14, created on 2014-10-01 14:18:51
         compiled from "./templates/modalciudad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1323383451542becb19c69f5-16488806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c249933680464c71959dcc834a5f4f0a17c6d0e7' => 
    array (
      0 => './templates/modalciudad.tpl',
      1 => 1412165810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1323383451542becb19c69f5-16488806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542becb19ce557_60007853',
  'variables' => 
  array (
    'ciudad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542becb19ce557_60007853')) {function content_542becb19ce557_60007853($_smarty_tpl) {?>                      <!--INICIO MODAL CERRAR--> 
                      <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">Confirmacion de eliminacion</h4>
                            </div>

                            <div class="modal-body">
                              <p>Vas a borrar una ciudad ; este procedimiento es irreversible.</p>
                              <p>¿Quieres continuar?</p>
                              <p class="debug-url"></p>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              <button onClick="BorrarCiudad(<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
)" class="btn btn-danger danger">Borrar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--FIN MODAL CERRAR--> <?php }} ?>