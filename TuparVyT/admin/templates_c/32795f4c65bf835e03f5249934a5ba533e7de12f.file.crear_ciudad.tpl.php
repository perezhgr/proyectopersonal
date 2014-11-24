<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 14:20:59
         compiled from "./templates/crear_ciudad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1519808595415a3c3a66d22-29589237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32795f4c65bf835e03f5249934a5ba533e7de12f' => 
    array (
      0 => './templates/crear_ciudad.tpl',
      1 => 1416764586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519808595415a3c3a66d22-29589237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5415a3c3bc1ba6_42746275',
  'variables' => 
  array (
    'Mail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5415a3c3bc1ba6_42746275')) {function content_5415a3c3bc1ba6_42746275($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Ciudades
        </a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home">
          <form id="formciudad" class="form-horizontal" method="POST" enctype="multipart/form-data" >
            <fieldset>
              <legend>Ciudad</legend>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                <div class="col-lg-10">
                  <input id="ciudad" type="text" class="form-control" placeholder="Nombre" name="ciudad" >
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Duracion</label>
                <div class="col-lg-10">
                  <input id="duracion" type="text" class="form-control" placeholder="Duracion" name="duracion" >
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Precio</label>
                <div class="col-lg-10">
                  <input id="precio" type="text" class="form-control" placeholder="Precio" name="precio" >
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Eliga imagenes</label>

              <!--DIV QUE CONTIENE A LOS BOTONES PARA CARGAR IMAGENES-->
                
                <div class="col-lg-4 centered">
                  <span class="btn btn-default btn-file">
                    <i class="fa fa-picture-o fa-2x"></i>
                    <input id="img1" type="file" name="imagen0" onchange="PreviewImage();" /> </span>

                    <span class="btn btn-default btn-file">
                      <i class="fa fa-picture-o fa-2x"></i>
                      <input id="img2" type="file" name="imagen1" onchange="PreviewImage2();" />
                    </span>

                    <span class="btn btn-default btn-file">
                      <i class="fa fa-picture-o fa-2x"></i>
                      <input id="img3" type="file" name="imagen2" onchange="PreviewImage3();" /></span><br>
                    </div>    
              </div>    
              <!--DIV QUE CONTIENE A LOS BOTONES PARA CARGAR IMAGENES->

              <!--DIV QUE CONTIENE A LAS IMAGENES-->
              <div class="form-group">

                <div class="col-lg-4">
                  <img class="img-thumbnail" id="uploadPreview" style="width: 300px; height: 200px;" /><br><br>

                </div>
                <div class="col-lg-4 ">
                  <img class="img-thumbnail" id="uploadPreview2" style="width: 300px; height: 200px;" /><br><br>
                
                </div>
                <div class="col-lg-4 ">
                  <img class="img-thumbnail" id="uploadPreview3" style="width: 300px; height: 200px;" /><br><br>

                </div>  
                <script type="text/javascript">

                </script>
              </div>
              <!--FIN DIV QUE CONTIENE A LAS IMAGENES-->
              <br>
            </fieldset>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <input id="botoncrearciudad" type="submit" class="btn btn-primary" value="Crear">&nbsp;&nbsp;
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-1"></div>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>