<?php /* Smarty version Smarty-3.1.14, created on 2014-08-24 22:01:07
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27000806353f0f9ec82d754-60246368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1408910465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27000806353f0f9ec82d754-60246368',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0f9eca02178_79081884',
  'variables' => 
  array (
    'Secciones' => 0,
    'secciones' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0f9eca02178_79081884')) {function content_53f0f9eca02178_79081884($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <body>
    <div id="top" class="site-wrapper">

      <div class="site-wrapper-inner">
        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand" >Tupar viajes y turismo</h1>
              <ul class="nav masthead-nav">
                <?php  $_smarty_tpl->tpl_vars['secciones'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['secciones']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Secciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['secciones']->key => $_smarty_tpl->tpl_vars['secciones']->value){
$_smarty_tpl->tpl_vars['secciones']->_loop = true;
?>
                  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['secciones']->value['id_seccion'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='1'){?>
                    <li class="active">
                    <a href="javascript:GetCategoria(<?php echo $_smarty_tpl->tpl_vars['secciones']->value['id_seccion'];?>
)">
                    <i class="fa fa-home fa-2x" ></i>                      
                  <?php }?>
                    </li>
                    <li>
                      <a href="javascript:GetCategoria(<?php echo $_smarty_tpl->tpl_vars['secciones']->value['id_seccion'];?>
);">
                      <?php echo $_smarty_tpl->tpl_vars['secciones']->value['nombre_seccion'];?>
</a>
                    </li>
                <?php } ?>
              </ul>
            </div>
          </div>      

          <div class="mastfoot">
          <div class="row">  
          <div class="col-md-12">
          <form class="navbar-form navbar-right" role="form"><br>
            <div class="form-group">
              <input class="input" type="text" placeholder="Email" class="form-control" size="30">
            </div>
            <div class="form-group">
              <input class="input"type="password" placeholder="Contraseña" class="form-control" size="30">
            </div>
            <button class="boton" type="submit" class="btn btn-success"><font color="#262626">Iniciar</font></button>
          </form>
          </div>
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
               <i class="fa fa-twitter-square fa-3x" ></i>&nbsp&nbsp
               <i class="fa fa-facebook-square fa-3x"></i>&nbsp&nbsp
               <i class="fa fa-instagram fa-3x"></i>&nbsp&nbsp
               <i class="fa fa-youtube-square fa-3x"></i>&nbsp&nbsp
              </div>
            </div>                      
        
      </div>
            <div class="inner">
              <p>Tupar Viajes y Turismo - <a href="#">Copyright 2014</a>.</p>
            </div>

          </div>

        </div>

      </div>
    </div>

    <!--En este div es donde se colococa el contenido que se trae con Ajax!-->
      <div id="contenido" class="container bs-docs-container">
      
      </div>      
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>