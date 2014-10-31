<?php /* Smarty version Smarty-3.1.14, created on 2014-10-31 18:53:28
         compiled from "./templates/registrodesabilitado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2813980955453cc98dc7ab7-78428588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b06431e2afa74a1e3cc00761446be8ff20b39c39' => 
    array (
      0 => './templates/registrodesabilitado.tpl',
      1 => 1414776681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2813980955453cc98dc7ab7-78428588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5453cc9907bbf4_87026595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453cc9907bbf4_87026595')) {function content_5453cc9907bbf4_87026595($_smarty_tpl) {?>        <!--FORM PARA REGISTRARSE -->
        <div class="row">
          <div class="col-lg-4"></div>
          <div id="divform" class="col-lg-4 bx zoom">
            <form id="formregistrarse" class="form-horizontal" ACTION="" METHOD="POST">
              <fieldset >
                <div class="form-group">
                  <div class="col-lg-12">
                    <label>Registrate y comenta nuestros destinos.</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" disabled />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control" id="email" placeholder="Mail" name="mail" disabled />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="pass" disabled />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-1">
                    <button id="registrarse" type="submit" data-toggle="tooltip" data-placement="left" title="Registrate" class="zoom btn btn-default btn-md"><i class="fa fa-sign-in fa-2x"></i>&nbsp;</button>
                  </div><br><br>
                  <small>¿Ya tienes una cuenta?
                  </small>
                  <a style="cursor:pointer"class="zoom" data-toggle="modal" data-target="#myModal"><strong>&nbsp;Inicia sesion</strong></a>
                </div>
              </fieldset>
            </form>
          </div><br><br>
        </div><?php }} ?>