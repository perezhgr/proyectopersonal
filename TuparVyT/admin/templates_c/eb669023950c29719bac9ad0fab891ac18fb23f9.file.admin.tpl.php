<?php /* Smarty version Smarty-3.1.14, created on 2014-10-01 21:28:08
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1340954347541591112ed7c1-77948224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1412191683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1340954347541591112ed7c1-77948224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5415911143e749_75288648',
  'variables' => 
  array (
    'Mail' => 0,
    'Countcity' => 0,
    'i' => 0,
    'Countcoment' => 0,
    'Countcondicion' => 0,
    'Countuser' => 0,
    'Ciudad' => 0,
    'ciudad' => 0,
    'Testimonio' => 0,
    'testimonio' => 0,
    'Condicion' => 0,
    'condicion' => 0,
    'Usuario' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5415911143e749_75288648')) {function content_5415911143e749_75288648($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <body>

    <div class="container">

      <!-- Typography
      ================================================== -->
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="text-center">Administracion del Sitio Tupar VyT</h2>
            </div>
          </div>
        </div>

      <!-- Forms
      ================================================== -->
        <div class="row">
          <div class="col-lg-9">
          </div>
          <div class="col-lg-2">                        
           <?php if (isset($_smarty_tpl->tpl_vars['Mail']->value)){?>
           <h4><strong>Conectado como:</strong><p class="text-success"><?php echo $_smarty_tpl->tpl_vars['Mail']->value;?>
</p></h4>           
          <?php }?>
          </div>
          <div class="col-lg-1">
          <button id="logout" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Salir">
              <span class="glyphicon glyphicon-log-out">&nbsp&nbsp</span>
            </button>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-1">          
          </div>
          <div class="col-lg-10">
                <div  id="alerta" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <div id="mensaje"></div>
                </div>

                  <ul class="nav nav-tabs">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Countcity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <li class="active"><a href="#ciudad" data-toggle="tab">Ciudades
                    <span class="badge"><div id="count"><?php echo $_smarty_tpl->tpl_vars['i']->value['countcity'];?>
</div></span></a></li>
                    <?php } ?>
                    
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Countcoment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <li><a href="#comentario" data-toggle="tab">Testimonios
                    <span class="badge"><?php echo $_smarty_tpl->tpl_vars['i']->value['countcoment'];?>
</span></a></li>
                    <?php } ?>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Countcondicion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>                    
                    <li><a href="#condicion" data-toggle="tab">Condicion del turista
                    <span class="badge"><?php echo $_smarty_tpl->tpl_vars['i']->value['countcondicion'];?>
</span></a></li>
                    <?php } ?>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Countuser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>                    
                    <li><a href="#usuario" data-toggle="tab">Usuarios
                    <span class="badge"><?php echo $_smarty_tpl->tpl_vars['i']->value['countuser'];?>
</span></a></li>
                    <?php } ?>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="ciudad">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Ciudad</th>
                            <th>Duracion</th>
                            <th>Precio</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tbody id="TabCiudad">
                          <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
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
                            <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
</td>
                            <td>
                              <a href="AM_ciudad.php?id_ciudad=<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                               <a data-href="" data-toggle="modal" data-target="#confirm-delete" href="#"><span class="glyphicon glyphicon-trash"></span></a><br>
                            </td>
                          </tr>
                          <!--INICIO MODAL CERRAR--> 
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
);ActualizarContadorCiudad(<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
);" class="btn btn-danger danger">Borrar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--FIN MODAL CERRAR-->  
                                             
                          <?php } ?>
                        </tbody>
                        <tfoot>
                            <td>
                            <ul class="nav nav-pills">
                              <li class="active"><a href="AM_ciudad.php">Crear</span></a></li>
                              </ul>
                            </td>
                        </tfoot>
                      </table> 
                    </div>
                    <div class="tab-pane fade" id="comentario">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Persona</th>
                            <th>Condicion</th>
                            <th>Texto</th>
                            <th>Accion</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php  $_smarty_tpl->tpl_vars['testimonio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonio']->_loop = false;
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
                            <td>
                              <a href="borrar_comentario.php?id_comentario=<?php echo $_smarty_tpl->tpl_vars['testimonio']->value['id_comentario'];?>
"><span class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>                            
                          </tr>
                          
                          <?php } ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table> 
                    </div>   
                    <div class="tab-pane fade" id="condicion">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>                            
                            <th>Condicion</th>
                            <th>Accion</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php  $_smarty_tpl->tpl_vars['condicion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['condicion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Condicion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['condicion']->key => $_smarty_tpl->tpl_vars['condicion']->value){
$_smarty_tpl->tpl_vars['condicion']->_loop = true;
?>
                          <tr class="active danger">
                            <td><?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['condicion']->value['condicion'];?>
</td>
                            <td>
                              <a href="AM_condicion.php?id_condicion=<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                              <a href="borrar_condicion.php?id_condicion=<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
"><span class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>                            
                          </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                            <td>
                            <ul class="nav nav-pills">
                              <li class="active"><a href="AM_condicion.php">Crear</span></a></li>
                              </ul>
                            </td>
                        </tfoot>
                      </table> 
                    </div>
                    <div class="tab-pane fade" id="usuario">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>                            
                            <th>Nombre</th>
                            <th>E-mail</th>
                            <th class="text-center">¿Tiene previlegios de administrador?</th>
                            <th>Accion</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
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
                              <p class="text-center"><a href="editar_usuario.php?id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
"><span class=" glyphicon glyphicon-ok"></span>
                              </a></p>
                            <?php }else{ ?>  
                            <p class="text-center"><a href="editar_usuario.php?id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
"><span class="glyphicon glyphicon-remove"></span>
                            </a></p>
                            <?php }?>
                            </td>  
                            <td>
                            <a href="borrar_usuario.php?id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
"><span class=" text-center glyphicon glyphicon-trash"></span>
                            </a>
                            </td> 
                          </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table> 
                    </div> 
                  </div>
          </div>
          
          <div class="col-lg-1"></div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        <?php }} ?>