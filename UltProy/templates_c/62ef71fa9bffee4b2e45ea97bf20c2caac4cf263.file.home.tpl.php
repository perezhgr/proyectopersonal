<?php /* Smarty version Smarty-3.1.14, created on 2014-09-15 15:22:39
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2714599155416d238a9e215-72868841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1410787356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2714599155416d238a9e215-72868841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5416d238b3be11_62975523',
  'variables' => 
  array (
    'Empresa' => 0,
    'empresa' => 0,
    'Ciudades' => 0,
    'ciudad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416d238b3be11_62975523')) {function content_5416d238b3be11_62975523($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
  <div class="page-wrapper">
    <header class="header-10">
      <div class="container">
        <div class="row">
          <div class="navbar col-sm-12" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle"></button>
              <a class="brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav pull-left">
                <li class="active"><a href="#about">Acerca de</a></li>
                <li><a href="#bakery">Paquetes</a></li>
                <li><a href="#contacts">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="header-10-sub v-center">
      <div class="background">&nbsp;</div>
      <div>
        <div class="container">
          <div class="hero-unit">
            <h1>Tupar VyT</h1><br>
            <h1>Tu sueño hecho realidad</h1>
          </div>
        </div>
      </div>
      <a class="control-btn fui-arrow-down" href="#"> </a>
      <i class="fa fa-angle-down"></i>
    </section>

    <section class="simple-block" id="about">
      <div class="container">
        <h1>Nuestro servicio</h1>
        <div class="text-block col-sm-10 col-sm-offset-1">
          <div class="row">
            <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['emp']['iteration']==1){?>
            <h4><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</h4><br>
            <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
            <?php }?> 
            <?php } ?>                 
          </div>
        </div>
      </div>
    </section>
    <header class="header-23">
      <div class="mask">&nbsp;</div>
      <div class="popup-video">
      </div>

      <div class="popup-video-1">
      </div>
    </header>
    <section class="video-block">
      <div class="header-23-sub" id="first">
        <div class="background">&nbsp;</div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="hero-unit">
                <a href=""  class="btn-play play"  title=""><span class="fui-play"></span></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="simple-block" id="bakery">
    <div class="container">
      <div class="text-block col-sm-10 col-sm-offset-1">
        <div class="row">
          <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']++;
?>
          <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['emp']['iteration']==2){?>
          <h1><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</h1>
          <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
          <ul class="links">
            <li><a href="#h1-bread">Sidney</a></li>
            <li><a href="#h1-pastries">Nueva York</a></li>
            <li><a href="#h1-cafe">Berlin</a></li>
          </ul>
          <?php }?> 
          <?php } ?> 
        </div>
      </div>
    </div>
  </section>
  <section class="content-23 v-center custom-bg bread-section" id="h1-bread">
    <div class="holder v-center">
      <div>
        <div class="container">
          <div class="hero-unit hero-unit-bordered">
            <h1>Sidney</h1>
          </div>
        </div>
      </div>
    </div>
    <a class="control-btn fui-arrow-down" href="#"> </a>
  </section>

  <!-- Ciudades -->
  <section class="custom-crumbs-block custom-block">
    <div class="container">
      <div class="text-block col-sm-10 col-sm-offset-1">
        <div class="row">
          <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']++;
?>
          <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['emp']['iteration']==3){?>
          <h1><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</h1>
          <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
          <?php }?> 
          <?php } ?>
        </div>
      </div>
      <div class="items">
      
        <div class="row">
        
          <div class="col-sm-12">
            <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>    
            <div class="col-xs-4">
              <div class="photo"><img src="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['path'];?>
" width="300" height="186"></div>
              <div class="item info"><br>
                <div class="name"><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
<br><br>
                  <a class="btn btn-primary btn-lg" href="#modal">Ver detalle</a>
                </div>
              </div>
            </div>   
            <?php } ?>      
          </div>
        </div>       

         <a class="show_more" href="#">Ver mas</a>    

          <div class="hidden-box">
            <div class="col-sm-12">
              <div class=" col-xs-4">
                <div class="photo"><img src="img/roma.jpg" width="300" height="186"></div>
                <div class="item info"><br>
                  <div class="name">White round sourdough loaf with seeds<br><br>
                  <a class="btn btn-primary btn-lg" href="#modal">Ver detalle</a>
                </div>
                </div>
              </div>
              <div class=" col-xs-4">
                <div class="photo"><img src="img/dubai.jpg" width="300" height="186"></div>
                <div class="item info"><br>
                  <div class="name">White round sourdough loaf with seeds<br><br>
                  <a class="btn btn-primary btn-lg" href="#modal">Ver detalle</a>
                </div>
                </div>
              </div>
              <div class="clearfix visible-xs"></div>
              <div class=" col-xs-4">
                <div class="photo"><img src="img/paris.jpg" width="300" height="186"></div>
                <div class="item info"><br>
                  <div class="name">White round sourdough loaf with seeds<br><br>
                  <a class="btn btn-primary btn-lg" href="#modal">Ver detalle</a>
                </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>






    <!-- Modal -->

    <div id="modal">
      <div class="modal-content">
        <div class="header">
          <h3>Amsterdam</h3>
        </div>
        <div class="copy">
          <div class="row">
            <div class="col-sm-4">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/amsterdam2.jpg" alt="...">
                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/amsterdam3.jpg" alt="...">
                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/amsterdam.jpg" alt="...">
                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                  ...
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
            </div>
            <div class="col-sm- text-center">
              <p>Lugar:Amsterdam</p><br>
              <p>Precio:$5000</p><br>
              <p>Duracion:3 dias</p><br>
            </div>



          </div><hr><hr>
          <div class="row">
            <div class="col-sm-12">
              <a href=""><p class="text-center">Ver comentarios</p></a>

              <address>
                <strong>Comentarios(12):</strong><br>
                <div class="jumbotron"><strong><u>Hugo (Soltero) dijo:</u></strong><br>
                  • EL lugar estuvo increible !</div>
                  <div class="jumbotron"><strong><u>Maria (Luna de miel) dijo:</u></strong><br>
                    • EL lugar estuvo increible !</div>                                
                    <strong>Maria (Luna de miel) dijo:</strong><br>
                    • EL lugar estuvo increible !<hr>
                  </address>

                </div>
              </div>
            </div>
            <div class="cf footer">
              <a href="javascript: window.history.go(-1)">Cerrar</a>
            </div>
          </div>
          <div class="overlay"></div>
        </div>

        <!-- Modal -->
        <!--/.container-->
      </section>

  <!-- Ciudades -->

      <section class="content-23 v-center custom-bg pastries-section" id="h1-pastries">
        <div class="holder v-center">
          <div>
            <div class="container">
              <div class="hero-unit hero-unit-bordered">
                <h1>Nueva York</h1>
              </div>
            </div>
          </div>
        </div>
        <a class="control-btn fui-arrow-down" href="#"> </a>
      </section>
      <section class="custom-crumbs-block">
        <div class="container">
          <div class="row">
            <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['emp']['iteration']==4){?>
            <div class="text-block col-sm-10 col-sm-offset-1">
             <h1><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</h1><br>
             <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
           </div>
           <?php }?> 
           <?php } ?>
         </div>

       </div>
       <!--/.container-->
     </section>

     <section class="content-23 v-center custom-bg cafe-section" id="h1-cafe">
      <div class="holder v-center">
        <div>
          <div class="container">
            <div class="hero-unit hero-unit-bordered">
              <h1>Berlin</h1>
            </div>
          </div>
        </div>
      </div>
      <a class="control-btn fui-arrow-down" href="#"> </a>
    </section>
    <section class="custom-crumbs-block">
      <div class="container">
        <div class="text-block col-sm-10 col-sm-offset-1">
          <div class="row">
            <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['emp']['iteration']==5){?>
            <h1><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
            <?php }?> 
            <?php } ?>  
          </div>
        </div>

      </div>

      <!--/.container-->
    </section>

    <section class="simple-block contacts" id="contacts">
      <div class="container">
        <div class="text-block col-lg-12">

          <h1>Estaríamos encantados de proporcionarle con más información , sólo tiene que llamar , correo electrónico o visítenos</h1>

          <div class="row">

            <div class"contact-block col-lg-12">
              <form class="form-horizontal" method="POST">
                <fieldset>
                  <legend >Envienos su consulta</legend><br>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="mail" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Asunto</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Asunto" name="pass">
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputText" class="col-lg-2 control-label">Mensaje</label>
                   <div class="col-lg-10  control-label">
                    <textarea class="form-control" rows="8" type="text" name="texto" placeholder="Escriba su mensaje"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>

        </div>         
      </div>
    </section>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>