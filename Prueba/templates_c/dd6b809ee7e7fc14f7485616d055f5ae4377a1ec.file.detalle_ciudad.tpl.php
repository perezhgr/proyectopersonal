<?php /* Smarty version Smarty-3.1.14, created on 2014-09-10 19:37:53
         compiled from "./templates/detalle_ciudad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144153659354107fae9c14d8-68406373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd6b809ee7e7fc14f7485616d055f5ae4377a1ec' => 
    array (
      0 => './templates/detalle_ciudad.tpl',
      1 => 1410368495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144153659354107fae9c14d8-68406373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54107faea46cc4_22010837',
  'variables' => 
  array (
    'Ciudad' => 0,
    'ciudad' => 0,
    'Imagen' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54107faea46cc4_22010837')) {function content_54107faea46cc4_22010837($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>

<!-- PAGE CONTENT -->
<div id="page-content" class="fixed-header">

    <!-- HEADER -->
    <header id="header" class="header-overlay">        
        <div class="header-inner wrapper clearfix">
            <div class="menu clearfix">
            <nav id="main-nav">
                    <ul>
                    <li class="current-menu-item"><a href="home.php" class="scroll-to">Inicio</a></li>
                    <li><a href="home.php#2" class="scroll-to">Acerca</a></li>
                    <!--li><a href="#portfolio" class="scroll-to">Portfolio</a></li-->
                    <li><a href="#3" class="scroll-to">Paquetes</a></li>
                    <li><a href="home.php#4" class="scroll-to">Testimonio</a></li>
                    <li><a href="home.php#5" class="scroll-to">Contacto</a></li>
                    </ul>
                </nav>
            </div>
                    
        </div> <!-- END .header-inner -->
    </header> <!-- END header -->
    <!-- HEADER --> 

    <!-- BANNER --> 
    <div class="banner">
        <div class="container">
        <img src="img/banner/banner4.jpg" alt="">
        </div>
    </div>   
    <!-- BANNER --> 
        
        <!-- TEAM -->
        <section>
        <div class="section-inner">
<div class="wrapper">
    <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
    <div class="section-title"  id="3">
        <h2>Detalles del destino</h2>
        <div class="seperator size-small"><span></span></div>
        <h4 class="subtitle">•&nbsp<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</h4>
        <input type="submit" name="" class="submit" value="Comprar"/><br>
        <!--<input type="submit" name="" class="submit" value="Ver comentarios"/>-->
    </div>
    <div class="column-section clearfix">
    <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Imagen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
    <div class="column one-third align-center sr-animation sr-animation-frombottom" data-delay="200">
            <div class="team-pic">
                <div class="imgoverlay text-light">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="Amsterdam">
                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo">
                    <a href="detalle_viaje.html">Ver mas</a>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    <?php } ?>
    <!--<div class="column one-third align-center last-col sr-animation sr-animation-frombottom" data-delay="600">
            <div class="team-pic">
                <div class="imgoverlay text-light">
                    <img src="img/amsterdam.jpg" alt="UX Paula Dab&oacute;s">
                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo">
                        <a href="detalle_viaje.html">Ver mas</a>
                    </div>
                    </div>
                </div>
            </div></br></br>
    </div>-->
        <div class="column six-fourth align-center  sr-animation sr-animation-frombottom" data-delay="800">
            <div class="team-pic">
            	<h4>Duracion</h4>
            	<p><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['duracion'];?>
</p>
            	<h4>Precio</h4>
            	<p><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
</p>
            	<h4>Descripcion</h4>
            	<p><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['descripcion'];?>
</p>
                <?php echo $_smarty_tpl->getSubTemplate ("incluye.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div><br>
            <div class="spacer spacer-big"></div>     
        </div>    
    
<?php } ?>
</div> <!-- END .wrapper -->
</div> <!-- END .wrapper -->
</div> <!-- END .section-inner-->       </section>
        <!-- TEAM -->      
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>