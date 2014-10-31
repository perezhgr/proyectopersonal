<?php /* Smarty version Smarty-3.1.14, created on 2014-10-31 19:12:05
         compiled from "./templates/formregistrodeshabilitado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16326967385453ccfc8dc729-80869726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8a45b15f5911de38cb461aee2104324ee2c7d1a' => 
    array (
      0 => './templates/formregistrodeshabilitado.tpl',
      1 => 1414779122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16326967385453ccfc8dc729-80869726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5453ccfc8df461_06442211',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453ccfc8df461_06442211')) {function content_5453ccfc8df461_06442211($_smarty_tpl) {?>        <!--FORM PARA REGISTRARSE -->
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