<?php /* Smarty version Smarty-3.1.14, created on 2014-09-25 20:12:34
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203518564354245b12872396-23342665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1411652765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203518564354245b12872396-23342665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54245b128c9a22_24591184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54245b128c9a22_24591184')) {function content_54245b128c9a22_24591184($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Programacion Web II</title>

    <!-- Bootstrap core CSS -->
    <link href="css\bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css\signin.css" rel="stylesheet">

  <style type="text/css"></style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style></head>

  <body>

    <div class="container">
<?php if (isset($_smarty_tpl->tpl_vars['Nombre']->value)){?>
		<h1>Logged in as:<p class="text-success"><?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
</p></h1>
        <button id="logout" class="btn btn-lg btn-primary btn-block">Logout</button>
<?php }else{ ?>		
	<h1>Please Login</h1>
    <button id="login" class="btn btn-lg btn-primary btn-block" onClick="window.location = 'login.php';">Login</button>
<?php }?>     

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>


</body></html><?php }} ?>