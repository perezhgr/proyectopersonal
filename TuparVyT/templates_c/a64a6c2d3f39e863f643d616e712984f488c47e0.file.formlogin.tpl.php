<?php /* Smarty version Smarty-3.1.14, created on 2014-11-07 20:58:40
         compiled from "./templates/formlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6776214735453d509318a87-03954777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a64a6c2d3f39e863f643d616e712984f488c47e0' => 
    array (
      0 => './templates/formlogin.tpl',
      1 => 1415390231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6776214735453d509318a87-03954777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5453d50933f252_07513180',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453d50933f252_07513180')) {function content_5453d50933f252_07513180($_smarty_tpl) {?>          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Inicia sesion</h4>
                  
                </div>
                <div class="modal-body">
                  <form id="FormLogin" class="form-horizontal" method="POST">
                    <fieldset>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="mail" placeholder="Mail" name="mail">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                          <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                          <button id="iniciar" type="submit" data-toggle="tooltip" data-placement="left" title="Iniciar sesion" class="btn btn-primary btn-md btn-block"><i id="signin"class="fa fa-sign-in fa-2x"></i>&nbsp;</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div><br><?php }} ?>