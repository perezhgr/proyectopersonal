<?php /* Smarty version Smarty-3.1.14, created on 2014-11-08 14:56:06
         compiled from "./templates/formregistro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193829199545e20f6870643-02912144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec4d27d3e8b4a972dea8664e60c8e1b9621ac16' => 
    array (
      0 => './templates/formregistro.tpl',
      1 => 1415453186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193829199545e20f6870643-02912144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545e20f6891b14_16705901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545e20f6891b14_16705901')) {function content_545e20f6891b14_16705901($_smarty_tpl) {?>        <!--FORM PARA REGISTRARSE -->
        <div class="row">
          <div class="col-lg-4"></div>
          <div id="divform" class="col-lg-4 bx zoom">
            <form id="formregistrarse" class="form-horizontal" ACTION="" METHOD="POST">
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
                    <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
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