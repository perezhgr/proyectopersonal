<?php /* Smarty version Smarty-3.1.14, created on 2014-09-13 00:05:18
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810764421540c64a4b40958-95025504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1410524443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810764421540c64a4b40958-95025504',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_540c64a4b8bff5_11431477',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540c64a4b8bff5_11431477')) {function content_540c64a4b8bff5_11431477($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <body>

    <div class="container">

      <!-- Typography
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 class="text-center">Administracion del Sitio Tupar VyT</h1>
            </div>
          </div>
        </div>

      <!-- Forms
      ================================================== -->
        <div class="row">
        <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal" method="POST">
                <fieldset>
                  <legend>Por favor, inicie sesion</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="mail" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-3 col-lg-offset-9">
                      <button type="submit" class="btn btn-primary btn-lg">Iniciar</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
          

        </div>
      </div>
      
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
      <?php }} ?>