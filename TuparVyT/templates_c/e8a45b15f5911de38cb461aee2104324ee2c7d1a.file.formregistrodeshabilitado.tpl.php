<?php /* Smarty version Smarty-3.1.14, created on 2014-11-08 14:56:58
         compiled from "./templates/formregistrodeshabilitado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1334040603545e212ab1bb19-47020530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8a45b15f5911de38cb461aee2104324ee2c7d1a' => 
    array (
      0 => './templates/formregistrodeshabilitado.tpl',
      1 => 1415453737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1334040603545e212ab1bb19-47020530',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545e212aba3311_99137645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545e212aba3311_99137645')) {function content_545e212aba3311_99137645($_smarty_tpl) {?>        <!--FORM PARA REGISTRARSE -->
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
                  <script type="text/javascript">
                  
                  </script>
                    <button id="registrarse" type="button" data-toggle="tooltip" data-placement="left" title="Registrate" class="btn btn-default btn-md" disabled="true"><i class="fa fa-sign-in fa-2x" ></i>&nbsp;</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div><br><br>
        </div><?php }} ?>