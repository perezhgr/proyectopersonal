<?php /* Smarty version Smarty-3.1.14, created on 2014-09-18 15:44:43
         compiled from "./templates/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1874274364541ad88de58ae3-84438745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afbabd2d7104bba99deb709b2f3809e75b1e519' => 
    array (
      0 => './templates/modal.tpl',
      1 => 1411047433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1874274364541ad88de58ae3-84438745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541ad88dea69d0_92972958',
  'variables' => 
  array (
    'Ciudad' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541ad88dea69d0_92972958')) {function content_541ad88dea69d0_92972958($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title>Bootstrap version 3.1 Modal with remote content</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap core CSS -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" media="screen">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
      <![endif]-->
    </head>
    <body>
      <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
     
      <a data-toggle="modal" class="btn btn-primary" title="Consultar" id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id_ciudad'];?>
">Ver detalle ciudad</a>
      <?php } ?>

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          
          
          </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
      </div> <!-- /.modal -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/remote.js"></script>
    </body>
  </body><?php }} ?>