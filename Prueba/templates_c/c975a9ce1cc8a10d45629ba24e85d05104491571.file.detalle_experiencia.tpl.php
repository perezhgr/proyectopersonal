<?php /* Smarty version Smarty-3.1.14, created on 2014-09-06 23:09:18
         compiled from "./templates/detalle_experiencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:473058511540b0fa99f6816-16147112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c975a9ce1cc8a10d45629ba24e85d05104491571' => 
    array (
      0 => './templates/detalle_experiencia.tpl',
      1 => 1410037755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '473058511540b0fa99f6816-16147112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_540b0fa9a46d01_20042925',
  'variables' => 
  array (
    'Ciudad' => 0,
    'ciudad' => 0,
    'Imagen' => 0,
    'imagen' => 0,
    'Count' => 0,
    'count' => 0,
    'Comentario' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540b0fa9a46d01_20042925')) {function content_540b0fa9a46d01_20042925($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                    <li><a href="home.php#3" class="scroll-to">Paquetes</a></li>
                    <li><a href="#4" class="scroll-to">Testimonio</a></li>
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
        <img src="img/banner5.jpg" alt="">
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
    <div class="section-title"  id="4">
        <h2>Experiencias de nuestros viajeros</h2>
        <div class="seperator size-small"><span></span></div>
        <h4 class="subtitle"><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
 • <?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_pais'];?>
</h4>
    </div>
    <?php } ?>
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
        
        <div class="column one-thirds align-left sr-animation sr-animation-frombottom" data-delay="800">
            <div class="team-pic">
                <?php  $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['count']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Count']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['count']->key => $_smarty_tpl->tpl_vars['count']->value){
$_smarty_tpl->tpl_vars['count']->_loop = true;
?>
                <h4>Comentarios (<?php echo $_smarty_tpl->tpl_vars['count']->value['cantidad'];?>
)</h4></br>
                <?php } ?>
                <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Comentario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
                 <dt class="even">
                 <a ><b><?php echo $_smarty_tpl->tpl_vars['comentario']->value['nombre_persona'];?>
</b></a>&nbsp
                    <span><?php echo $_smarty_tpl->tpl_vars['comentario']->value['fecha'];?>
</span>
                    <span>(<?php echo $_smarty_tpl->tpl_vars['comentario']->value['condicion'];?>
)</span>
                 </dt>
                <p class="text-left"><strong>•&nbsp</strong><?php echo $_smarty_tpl->tpl_vars['comentario']->value['texto'];?>
</p>
                <br>
                <?php } ?>
            </div></br>
        </div>         
    </div>
    </div>

    </div>
        <div class="spacer spacer-big"></div>     

</div> <!-- END .wrapper -->
</div> <!-- END .wrapper -->
</div> <!-- END .section-inner-->       </section>
        <!-- TEAM -->       
   
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>