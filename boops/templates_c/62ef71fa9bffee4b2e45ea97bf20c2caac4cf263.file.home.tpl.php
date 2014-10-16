<?php /* Smarty version Smarty-3.1.14, created on 2014-09-02 21:00:29
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163504257954022124cf5508-23041620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1409684427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163504257954022124cf5508-23041620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54022124db5c67_77776669',
  'variables' => 
  array (
    'Categorias' => 0,
    'categorias' => 0,
    'Contenido' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54022124db5c67_77776669')) {function content_54022124db5c67_77776669($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <body>
    <div id="top" class="site-wrapper">

      <div class="site-wrapper-inner">
        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand" >Tupar viajes y turismo</h1>
              <ul class="nav masthead-nav">
                <li class="active">
                    <a href="#"><i class="fa fa-home fa-2x" ></i></a>
                </li>
                <?php  $_smarty_tpl->tpl_vars['categorias'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categorias']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categorias']->key => $_smarty_tpl->tpl_vars['categorias']->value){
$_smarty_tpl->tpl_vars['categorias']->_loop = true;
?>                 
                <li><a href="home.php?id_categoria=<?php echo $_smarty_tpl->tpl_vars['categorias']->value['id_categoria'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['categorias']->value['nombre_categoria'];?>

                    </a>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>      

          <div class="mastfoot">
          <div class="row">
              <div class="col-md-12 ">
                <a href="https://www.twitter.com/">
                  <i class="fa fa-twitter-square fa-3x" ></i>&nbsp&nbsp
                </a>
                <a href="https://www.facebook.com/">
                  <i class="fa fa-facebook-square fa-3x"></i>&nbsp&nbsp
                </a>
                <a href="https://www.instagram.com/">
                  <i class="fa fa-instagram fa-3x"></i>&nbsp&nbsp
                </a>
                <a href="https://www.youtube.com/">
                  <i class="fa fa-youtube-square fa-3x"></i>&nbsp&nbsp
                </a>
              </div>
              </br>
                <a href="#tuparvt">
                  <i class="fa fa-chevron-down fa-2x"></i>
                </a>    
          </div>
            <div class="inner">
              <p>Tupar Viajes y Turismo - <a href="#">Copyright 2014</a>.</p>
            </div>
        </div>
      </div>
    </div>
</div>

<div id="tuparvt" class="container bs-docs-container">
<!-- Subcategoria-->
  <div class="row">
    <div class="col-md-12" role="main">
      <div class="bs-docs-section">
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Contenido']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
        <h1 id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_subcategoria'];?>
</h1></br></br>
        <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
<h4></br></br>
      </div>
        <?php } ?>
    </div>
  </div>
<!-- Fin Subcategoria-->      
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>