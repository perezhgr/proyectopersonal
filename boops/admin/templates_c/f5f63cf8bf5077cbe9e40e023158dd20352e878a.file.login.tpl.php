<?php /* Smarty version Smarty-3.1.14, created on 2014-08-31 00:46:11
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10632992254024e3611d650-44162473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1409438764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10632992254024e3611d650-44162473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54024e3615b976_78643064',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54024e3615b976_78643064')) {function content_54024e3615b976_78643064($_smarty_tpl) {?>  <body>

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Por favor inicia sesion</h2>
        <input type="email" name="mail" class="form-control" placeholder="E-mail" required autofocus>
        <input type="password" name="pass" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php }} ?>