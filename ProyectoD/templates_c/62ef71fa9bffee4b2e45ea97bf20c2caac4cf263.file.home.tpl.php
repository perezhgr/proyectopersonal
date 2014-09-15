<?php /* Smarty version Smarty-3.1.14, created on 2014-09-15 22:35:07
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2714599155416d238a9e215-72868841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1410813302,
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

      <div class="site-wrapper">

        <div class="site-wrapper-inner">

          <div class="cover-container">

            <div class="masthead clearfix">
              <div class="inner">
                <h3 class="masthead-brand"></h3>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#empresa">Acerca</a></li>
                  <li><a href="#paquetes">Paquetes</a></li>
                  <li><a href="#contacto">Contacto</a></li>
                </ul>
              </div>
            </div>

            <div class="inner cover">
              <h1 class="cover-heading">Tupar VyT</h1>
              <p class="lead">Tu sueño haecho realidad</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg"  data-toggle="modal2" data-target="
                .bs-example-modal-lg" role="button">Inicia sesion&raquo;</a>
                <a class="btn btn-success btn-lg"  data-toggle="modal3" data-target=".bs-example-modal-lg" role="button">Registrate&raquo;</a>
              </p>
            </div>
          </div>

        </div>

      </div><br><br><br><br><br>

      <div class="container marketing">
        <div class="row">
          <h2 id="empresa">Nuestro servicio</h2><br><br>
          <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
?>
          <div class="col-lg-6">
            <h3><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</h3><br>
            <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
          </div>
          <?php } ?>
        </div><br><br><br><br><br><br><br><br>

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <h2 id="paquetes">Paquetes</h2><br><br>
            <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <a href="#">
             <img src="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['path'];?>
" class="img-rounded img-responsive"  data-toggle="tooltip" data-placement="left" title="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
">
           </a>
           <p>
            <h3><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</h3>
            <a class="btn btn-primary "  data-toggle="modal" data-target=".bs-example-modal-lg" role="button" href="javascript:getDetalleCiudad(<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
)">Ver mas &raquo;</a>
            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
          </p>
         </div>
         <?php } ?>
         <div id="contenido"></div>
         <!-- /.col-lg-4 -->
       </div><br><br><br><br><br><br><br><br><!-- /.row -->

       <div class="row">
       <h2 id="contacto">Envienos su consulta</h2><br><br>
        <div class="col-lg-8">
        <h4>Estaríamos encantados de proporcionarle con más información , sólo tiene que llamar , correo electrónico o visítenos</h4><br><br>
        <form class="form-horizontal" method="POST">
            <fieldset>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="mail" >
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Asunto</label>
                <div class="col-lg-8">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Asunto" name="pass">
                </div>
              </div>
              <div class="form-group">
               <label for="inputText" class="col-lg-2 control-label">Mensaje</label>
               <div class="col-lg-8  control-label">
                <textarea class="form-control" rows="8" type="text" name="texto" placeholder="Escriba su mensaje"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-5">
                <button type="submit" class="btn btn-primary ">Enviar</button>
              </div>
            </div>
          </fieldset>
        </form>
        </div><br><br><br><br><br>
        <div class="row">

          <div class="col-lg-4">

            <p class="text-justify">Bee In Touch<br><br>

            To find out more about what we can do for you, request some more examples of our work, or arrange a meeting, please don't hesitate to get in touch.<br><br>
            Oficina Tupar VyT<br><br>

            25 de mayo 268<br>
            Tandil 7000<br>
            Argentina<br><br><br>

            +54 249 422 0494<br>
            tuparvyt@gmail.com<br></p>
          </div>
        </div>
      </div>    
     </div><br><br><br><br><br><br>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>