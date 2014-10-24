<?php /* Smarty version Smarty-3.1.14, created on 2014-10-24 19:26:06
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170233470754483c6f72cf81-30486735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1414171563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170233470754483c6f72cf81-30486735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54483c6f8d09e5_26095978',
  'variables' => 
  array (
    'Nombre' => 0,
    'ErrorUsuario' => 0,
    'ErrorPass' => 0,
    'Empresa' => 0,
    'empresa' => 0,
    'Ciudades' => 0,
    'ciudad' => 0,
    'City' => 0,
    'city' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54483c6f8d09e5_26095978')) {function content_54483c6f8d09e5_26095978($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <body>

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=".navbar-collapse" data-toggle="collapse" type="button">
              <span class="sr-only">Toggle navigation</span>
            </button>
          </div>
          <div class="collapse navbar-collapse">
          <a class="navbar-brand">Tupar VyT</a>
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="#top">Inicio</a>
              </li>
              <li>
                <a href="#empresa">Acerca</a>
              </li>
              <li>
                <a href="#paquetes">Paquetes</a>
              </li>
              <li>
                <a href="#contacto">Contacto</a>
              </li>             
            </ul>
            <ul class="nav navbar-nav" style="float: right">
              <li>
                <?php if (isset($_smarty_tpl->tpl_vars['Nombre']->value)){?> 
                <p style="display:none" class="lead">
                  <a class="zoom btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><strong>Inicia sesion</strong></a>
                </p>
                <p class="lead navbar-btn pull-right">
                  <a class="btn btn-primary btn-sm">
                    <strong >Hola <?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
 !</strong>
                  </a>&nbsp
                  <button id="logout" class="zoom btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Salir">
                    <i class="fa fa-power-off"></i>
                  </button>
                </p>
                <?php }else{ ?>
                <p class="lead">
                  <a class="zoom btn btn-default btn-sm navbar-btn pull-right" data-toggle="modal" data-target="#myModal"><strong>Inicia sesion</strong></a>
                </p>

                <?php }?>
              
            </li>
          </ul>
          </div>
        </div>
      </div>
      <div id="top" class="site-wrapper">

        <div class="site-wrapper-inner">

          <div class="cover-container ">

            <div class="inner cover ">
              <h1 class="cover-heading w ">Tupar Viajes y Turismo</h1>
              <p class="lead s zoom">Tu sueño hecho realidad...</p>

              <!-- FORM PARA LOGIN -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title" id="myModalLabel">Inicia sesion</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" method="POST">        
                        <fieldset>
                          <div class="form-group">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="mail" placeholder="Mail" name="mail">
                              <?php if (isset($_smarty_tpl->tpl_vars['ErrorUsuario']->value)){?>
                              <strong class="error"><?php echo $_smarty_tpl->tpl_vars['ErrorUsuario']->value;?>
</strong>
                              <?php }else{ ?>
                              <strong  style="display:none" class="error"><?php echo $_smarty_tpl->tpl_vars['ErrorUsuario']->value;?>
</strong>
                              <?php }?>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                              <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
                              <?php if (isset($_smarty_tpl->tpl_vars['ErrorPass']->value)){?>
                              <strong class="error"><?php echo $_smarty_tpl->tpl_vars['ErrorPass']->value;?>
</strong>
                              <?php }else{ ?>
                              <strong  style="display:none" class="error"><?php echo $_smarty_tpl->tpl_vars['ErrorPass']->value;?>
</strong>
                              <?php }?>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-2">
                            <button  id="iniciar" type="submit" data-toggle="tooltip" data-placement="left" title="Iniciar sesion" class="btn btn-primary btn-md btn-block"><i id="signin"class="fa fa-sign-in fa-2x"></i>&nbsp;</button>

                            </div>
                          </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div><br>
            <!-- FIN FORM PARA LOGIN -->

          <!--FORM PARA REGISTRARSE -->
          <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-4 bx zoom">
          <form  id="formregistrarse" class="form-horizontal" ACTION="" METHOD="POST">        
            <fieldset >
              <div class="form-group">
              <div class="col-lg-12">
                <label>Registrate y comenta nuestros destinos.</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-12">
                  <input type="text" class="form-control" id="email" placeholder="Mail" name="mail" >
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-12">
                  <input type="password" class="form-control" id="password" placeholder="Password" name="pass" >
              </div>
              </div>
            <div class="form-group">            
            <div class="col-lg-1">
              <button  id="registrarse" type="submit" data-toggle="tooltip" data-placement="left" title="Registrate" class="zoom btn btn-default btn-md"><i class="fa fa-sign-in fa-2x"></i>&nbsp;</button>
            </div><br><br>
              <small>¿Ya tienes una cuenta? 
              </small>
              <a style="cursor:pointer"class="zoom" data-toggle="modal" data-target="#myModal"><strong>&nbsp;Inicia sesion</strong></a>
            </div>
          </fieldset>
        </form>
        </div><br><br>
        </div>

            <div class="mastfoot">
            <div class="inner">
              <p><a href="http://fb.com"><i class="zoom fa fa-facebook fa-2x"></i></a>
              &nbsp&nbsp
              <a href="https://twitter.com"><i class=" zoom fa fa-twitter fa-2x"></i></a>
              &nbsp&nbsp
              <a href="https://youtube.com"><i class=" zoom fa fa-youtube-square fa-2x"></i></a>&nbsp&nbsp
              <a href="https://instagram.com"><i class="zoom fa fa-instagram fa-2x"></i></a><br>

              <a href="#empresa" class="sr-button sr-buttonicon small-iconbutton" title="Back to Top">
              <i class=" zoom fa fa-angle-double-down fa-3x"></i></a>
              </p>
            </div>
          </div>
          </div>

        </div>

      </div><br><br><br><br><br>
      <div class="container marketing">
        <div class="row" >
          <h2 id="empresa">Nuestro servicio</h2><br><br>
          <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']++;
?>
          <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['emp']['iteration']!==4){?>
          <div class="col-lg-6">
          <img class="zoom img-circle zoom" src="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['path'];?>
" alt="" style="width: 140px; height: 140px;">
            <h3 ><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</h3><br>
            <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
          </div>
          <?php }else{ ?>
          <div class="col-lg-12 ">
          <img class="img-circle zoom" src="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['path'];?>
" alt="Generic placeholder image" style="width: 140px; height: 140px;">
            <h3><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</h3><br>
            <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
          </div>
          <?php }?>
          <?php } ?>
        </div><br><br><br><br><br><br><br><br>


        <!-- Modal con Ajax-->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content ">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Detalles del paquete turistico</h3>
              </div>
              <div class="modal-body">
               <div id="contenidomodal"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin Modal con Ajax-->

        <!-- Three columns of text below the carousel -->
        <div class="row ">
          <h2 id="paquetes">Paquetes</h2><br><br>
          <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>

          <div class="col-lg-4 col-sm-6 col-xs-12 ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['path'];?>
"  alt="" class="img-rounded img-responsive zoom"  data-toggle="tooltip" data-placement="left" title="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
">
            <h3><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</h3>

            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" onClick="getDetalleCiudad(<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
)">Ver mas &raquo;</button>
          </div>   
        <?php } ?>
        <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['City']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value){
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
        <div class="col-lg-4 col-sm-6 col-xs-12 ">
          <img src="img/222.gif"  alt="" class="img-rounded img-responsive zoom"  data-toggle="tooltip" data-placement="left" title="<?php echo $_smarty_tpl->tpl_vars['city']->value['nombre_ciudad'];?>
">
          <h3><?php echo $_smarty_tpl->tpl_vars['city']->value['nombre_ciudad'];?>
</h3>
        </div>  
      <?php } ?>
        <!-- /.col-lg-4 -->
       </div><br><br><br><br><br><!-- /.row -->

       <div class="row">
       <h2 id="contacto">Envienos su consulta</h2><br><br>
        <div class="col-lg-8">
        <h4 class="text-center">Estaríamos encantados de proporcionarle con más información ,<br> sólo tiene que llamar , correo electrónico o visítenos</h4><br><br>
        <form class="form-horizontal" ACTION="" METHOD="POST">        
            <fieldset>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label"
                name="asunto">Asunto</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="asunto" placeholder="Asunto" name="asunto">
                </div>
              </div>
              <div class="form-group">
               <label for="inputText" class="col-lg-2 control-label">Mensaje</label>
               <div class="col-lg-8  control-label">
                <textarea class="form-control" rows="8" type="text" name="texto" placeholder="Escriba su mensaje" id="mensaje"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
              <button id="btnenviarmail" type="submit" class="btn btn-primary btn-md btn-block"><i class="fa fa-paper-plane fa-1x"></i></button>
                
              </div>
            </div>
          </fieldset>          
        </form>


               
        </div><br>
        <div class="row">

          <div class="col-lg-4">

            <h4 class="text-justify">Tupar VyT</h4><br>

            <p class="text-justify">Oficina Tupar VyT<br><br>


            <i class="zoom fa fa-road fa-2x"></i>&nbsp&nbsp25 de mayo 268<br><br>
            <i class="zoom fa fa-building fa-2x"></i>&nbsp&nbspTandil 7000<br><br>
            <i class="zoom fa fa-map-marker fa-2x"></i>&nbsp&nbsp&nbsp&nbspArgentina<br><br>
            <i class="zoom fa fa-phone fa-2x"></i>&nbsp&nbsp+54 249 422 0494<br><br>
            <i class="zoom fa fa-envelope fa-2x"></i>&nbsp&nbsptuparvyt@gmail.com<br><br>
            <i class="zoom fa fa-desktop fa-2x"></i>&nbsp&nbspwww.tuparvyt.com</p>

          </div>
        </div>
      </div>    
     </div><br><br><br><br><br><br>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>