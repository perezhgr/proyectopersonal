<?php /* Smarty version Smarty-3.1.14, created on 2014-09-14 16:49:42
         compiled from "./templates/crear_condicion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36013785415a47a071f70-60876046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a563fad399da08d1898576cb3a7d7bfe1577d83' => 
    array (
      0 => './templates/crear_condicion.tpl',
      1 => 1410706157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36013785415a47a071f70-60876046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5415a47a0e41a9_65946822',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5415a47a0e41a9_65946822')) {function content_5415a47a0e41a9_65946822($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Condicion del turista
                    </a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <form class="form-horizontal" method="POST">
                          <fieldset>
                            <legend>Condicion del turista</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Condicion</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Condicion para categorizar a un turista" name="condicion">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary btn-">Crear</button>
                              </div>
                            </div>
                          </fieldset>
                        </form>                        
                    </div>
                  </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>