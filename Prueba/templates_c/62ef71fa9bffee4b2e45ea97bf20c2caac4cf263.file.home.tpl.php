<?php /* Smarty version Smarty-3.1.14, created on 2014-09-11 20:06:57
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96855525054107f6496dc29-64002091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1410458740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96855525054107f6496dc29-64002091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54107f670f0495_97658969',
  'variables' => 
  array (
    'Menu' => 0,
    'menu' => 0,
    'Empresa' => 0,
    'empresa' => 0,
    'Ciudades' => 0,
    'ciudades' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54107f670f0495_97658969')) {function content_54107f670f0495_97658969($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>

<!-- PAGELOADER -->
<!--div id="page-loader">
    <div class="page-loader-inner">
        <div class="loader-logo"><img src="files/uploads/xone-logo.png" alt="Logo"/></div>
        <div class="loader-icon"><span class="spinner"></span><span></span></div>
    </div>
</div-->
<!-- PAGELOADER -->

<!-- PAGE CONTENT -->
<div id="page-content" class="fixed-header">

    <!-- HEADER -->
    <header id="header" class="header-overlay">        
        <div class="header-inner wrapper clearfix">
            <div class="menu clearfix">
            <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
            <nav id="main-nav">
                    <ul>
                    <li class="current-menu-item"><a href="#<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_menu'];?>
" class="scroll-to"><?php echo $_smarty_tpl->tpl_vars['menu']->value['nombre_menu'];?>
</a></li>
                </nav>
            <?php } ?>    
            </div>
                    
        </div> <!-- END .header-inner -->
    </header> <!-- END header -->
    <!-- HEADER -->    
    
    <!-- PAGEBODY -->
    <div class="page-body">
    
        <!-- HOME (SLIDER) -->
        <section id="1" class="no-padding">
        <div class="section-inner">



    <!-- REVOLUTION SLIDER -->

    <div class="home-slider-container">

        <div class="home-slider">

            <ul class="hidden">



                <!-- THE FIRST SLIDE -->

                <li data-transition="fade" data-slotamount="5" data-masterspeed="800">
                
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->

                    <img src="img/cover/sidney.jpg"   alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 2 -->

                    <div  class="tp-caption srcaption-bigwhite lfl ltr"

                          data-x="center" data-hoffset="0"

                          data-y="center" data-voffset="-150"

                          data-speed="1000"

                          data-start="100"

                          data-easing="easeInOutQuad"

                          data-endspeed="1000"

                          data-endeasing="easeInOutQuad"

                          style="z-index: 2">

                    </div>

                    <div class="tp-caption srcaption-bigwhite lfl ltr"

                         data-x="center" data-hoffset="0"

                         data-y="center" data-voffset="50"

                         data-speed="1000"

                         data-start="100"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 2">

                        <h1><strong>TUPAR</strong> VyT</h1>

                    </div>



                    <!-- LAYER NR. 2 -->

                    <div class="tp-caption srcaption-smallwhite sfb"

                         data-x="center" data-hoffset="0"

                         data-y="bottom" data-voffset="-70"

                         data-speed="500"

                         data-start="1200"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 3">Elija su destino

                    </div>



                    <!-- LAYER NR. 3 -->

                    <div class="tp-caption srcaption-miniwhite sfb text-light"

                         data-x="center" data-hoffset="0"

                         data-y="bottom" data-voffset="15"

                         data-speed="500"

                         data-start="1300"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 3"><a href="#3" class="sr-button sr-buttonicon small-iconbutton scroll-to" title="Our Team"><i class="fa fa-angle-down"></i></a>

                    </div>



                </li>



                <!-- THE SECOND SLIDE -->

                <li data-transition="fade" data-slotamount="5" data-masterspeed="800" >

                    <!-- THE MAIN IMAGE IN THE SECOND SLIDE -->

                    <img src="img/cover/paris.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">



                    <!-- LAYER NR. 1 -->

                    <div class="tp-caption srcaption-bigwhite lfl ltr"

                         data-x="center" data-hoffset="0"

                         data-y="center" data-voffset="0"

                         data-speed="1000"

                         data-start="100"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 2"><h1>TUPAR <strong>VyT</strong></h1>

                    </div>



                    <!-- LAYER NR. 2 -->

                    <div class="tp-caption srcaption-smallwhite sfb"

                         data-x="center" data-hoffset="0"

                         data-y="bottom" data-voffset="-70"

                         data-speed="500"

                         data-start="1200"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 3">Nuestro servicio

                    </div>



                    <!-- LAYER NR. 3 -->

                    <div class="tp-caption srcaption-miniwhite sfb text-light"

                         data-x="center" data-hoffset="0"

                         data-y="bottom" data-voffset="15"

                         data-speed="500"

                         data-start="1300"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 3"><a href="#2" class="sr-button sr-buttonicon small-iconbutton scroll-to" title="Our Services"><i class="fa fa-angle-down"></i></a>

                    </div>



                </li> <!-- end first slide -->



                <!-- THE THIRD SLIDE -->

                <li data-transition="fade" data-slotamount="5" data-masterspeed="800" >

                    <!-- THE MAIN IMAGE IN THE SECOND SLIDE -->

                    <img src="img/cover/vancouver.jpg"   alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                
                    <!-- LAYER NR. 2 -->

                    <div class="tp-caption srcaption-bigwhite lfl ltr"

                         data-x="center" data-hoffset="0"

                         data-y="center" data-voffset="0"

                         data-speed="1000"

                         data-start="100"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 2"><h1>TUPAR <strong>VyT</strong></h1>

                    </div>



                    <!-- LAYER NR. 2 -->

                    <div class="tp-caption srcaption-smallwhite sfb"

                         data-x="center" data-hoffset="0"

                         data-y="bottom" data-voffset="-70"

                         data-speed="500"

                         data-start="1200"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 3">Tupar Viajes y Turismo

                    </div>



                    <!-- LAYER NR. 3 -->

                    <div class="tp-caption srcaption-miniwhite sfb text-light"

                         data-x="center" data-hoffset="0"

                         data-y="bottom" data-voffset="15"

                         data-speed="500"

                         data-start="1300"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 3"><a href="#2" class="sr-button sr-buttonicon small-iconbutton scroll-to" title="Our Services"><i class="fa fa-angle-down"></i></a>

                    </div>



                </li>

                <!-- THE FOURTH SLIDE -->

                <li data-transition="fade" data-slotamount="5" data-masterspeed="800" >

                    <!-- THE MAIN IMAGE IN THE SECOND SLIDE -->

                    <img src="files/uploads/slider-bg3.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">



                    <!-- LAYER NR. 1 -->

                    <div class="tp-caption srcaption-bigwhite lfl ltr"

                         data-x="center" data-hoffset="0"

                         data-y="center" data-voffset="0"

                         data-speed="1000"

                         data-start="100"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 2"><h1>AND STRONG <strong>APPS</strong></h1>

                    </div>



                    <!-- LAYER NR. 2 -->

                    <div class="tp-caption srcaption-smallwhite sfb"

                         data-x="center" data-hoffset="0"

                         data-y="bottom" data-voffset="-70"

                         data-speed="500"

                         data-start="1200"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 3">More about how we make it

                    </div>



                    <!-- LAYER NR. 3 -->

                    <div class="tp-caption srcaption-miniwhite sfb text-light"

                         data-x="center" data-hoffset="0"

                         data-y="bottom" data-voffset="15"

                         data-speed="500"

                         data-start="1300"

                         data-easing="easeInOutQuad"

                         data-endspeed="1000"

                         data-endeasing="easeInOutQuad"

                         style="z-index: 3"><a href="#service" class="sr-button sr-buttonicon small-iconbutton scroll-to" title="Our Services"><i class="fa fa-angle-down"></i></a>

                    </div>



                </li> <!-- end first slide -->



            </ul>



        </div>

    </div> <!-- END .home-slider-container -->

    <!-- REVOLUTION SLIDER -->



</div> <!-- END .section-inner -->        </section>
        <!-- HOME (SLIDER) -->
    <div id="sections" class="hidden">
        <!-- SERVICE -->
        <section id="2">
        <div class="section-inner">
    <div class="wrapper">

        <div class="section-title">
            <h2>Nuestro servicio</h2>
            <div class="seperator size-small"><span></span></div>
            <!--h4 class="subtitle">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et.<br>lobortis aliquam. Aliquam in tortor enim. orci ut et lobortis aliquam.</h4-->
        </div>
        <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emp']['iteration']++;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['emp']['iteration']==1){?>
        <div class="column-section clearfix">
            <div class="column two-half align-center sr-animation sr-animation-zoomin service" data-delay="100">
                <img src="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['path'];?>
" alt="" />
                <h3><strong><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</strong></h3>
                <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p></br>
            </div>
        <?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['emp']['iteration']==2){?>
            <div class="column one-half last-col align-center align-center sr-animation sr-animation-zoomin service"  data-delay="250">
                <img src="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['path'];?>
" alt="" />
                <h3><strong><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</strong></h3>
                <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
            </div>
        <?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['emp']['iteration']==3){?>
            <div class="column one-half align-center align-center sr-animation sr-animation-zoomin service"  data-delay="400">
                <img src="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['path'];?>
" alt="" />
                <h3><strong><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</strong></h3>
                <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p></br>

            </div>
        <?php }else{ ?>
            <div class="column two-half last-col align-center align-center sr-animation sr-animation-zoomin service" data-delay="550">
                <img src="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['path'];?>
" alt="" />
                <h3><strong><?php echo $_smarty_tpl->tpl_vars['empresa']->value['titulo'];?>
</strong></h3>
                <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value['cuerpo'];?>
</p>
            </div>
        </div>
        <?php }?>
        <?php } ?>
        
    </div> <!-- END .wrapper -->
    <div class="spacer spacer-small"></div>

    <!-- PARALLAX VIDEO SECTION -->
    <div id="parallax-video" class="horizontalsection text-light videobg-section"
         data-videofile='https://www.youtube.com/embed/hwVGld3XxBg'
         data-videowidth="1280"
         data-videoheight="720"
         data-videoposter="img/cover/dubai.jpg"
         data-videoparallax="true"
         data-videooverlaycolor="#000000"
         data-videooverlayopacity="0.6">


        <div class="horizontalinner wrapper">
            <p class="align-center sr-animation sr-animation-frombottom" data-delay="200">
                <a href="https://www.youtube.com/embed/hwVGld3XxBg" data-type="video" data-width="500" data-height="281" class="sr-button sr-buttonicon medium-button easy-opener" title="Video de Dubai"><i class="fa fa-play fa-fw"></i></a>
            </p>

            <div class="spacer spacer-small"></div>

            <div class="section-title sr-animation">
                <h2>Dubai en Tupar Viajes y Turismo</h2>
                <div class="seperator size-small"><span></span></div>
                <h3 class="subtitle">Dubái se ha consolidado como un importante centro regional para las finanzas, el comercio, el turismo y las compras.</h3>
            </div>

            <p class="align-center"><a href="#5" class="scroll-to sr-button sr-button4 medium-button">Contactenos</a></p>
        </div>
    </div> <!-- END #parallax-video -->
    <!-- PARALLAX VIDEO SECTION -->

</div> <!-- END .section-inner-->   </section> <!-- END SECTION #service-->
        <!-- SERVICE -->
        
        <!-- PORTFOLIO -->
        <!--section id="portfolio">
            <script>
                $("#portfolio").load("sections/portfolio.html");
            </script>
        </section--> <!-- END SECTION #portfolio-->
        <!-- PORTFOLIO -->  
        
        <!-- TEAM -->
        <section id="3">
        <div class="section-inner">
<div class="wrapper">

    <div class="section-title">
        <h2>Elija su destino</h2>
        <div class="seperator size-small"><span></span></div>
        <h4 class="subtitle">Elija su destino para viajar</h4>
    </div>

    <div class="column-section clearfix">
    <?php  $_smarty_tpl->tpl_vars['ciudades'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudades']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudades']->key => $_smarty_tpl->tpl_vars['ciudades']->value){
$_smarty_tpl->tpl_vars['ciudades']->_loop = true;
?> 
    <div class="column one-fourth align-center sr-animation sr-animation-frombottom" data-delay="400">
            <div class="team-pic">
                <div class="imgoverlay text-light">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['ciudades']->value['path'];?>
" alt="Berlin">
                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo">
                    

                    </div>
                    </div>
                </div>
            </div>
            <h4 class="team-name"><strong><?php echo $_smarty_tpl->tpl_vars['ciudades']->value['nombre_ciudad'];?>
</strong></h4>
            <div class="seperator size-mini height-small"><span></span></div>
            <!--p class="team-info">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.
            </p-->
        </div>
        <?php } ?>  

<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Launch demo modal
                    </button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        lkadsfjds
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
    <!--<div class="column one-fourth align-center last-col sr-animation sr-animation-frombottom" data-delay="800">
            <div class="team-pic">
                <div class="imgoverlay text-light">
                    <img src="" alt="">
                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo">
                        <a href="detalle_viaje.html">Ver mas</a>
                    </div>
                    </div>
                </div>
            </div>
            <h4 class="team-name"><strong></strong></h4>
            <h6 class="team-role"></h6>
            <div class="seperator size-mini height-small"><span></span></div>
    </div-->
                           
    </div>
</div> <!-- END .wrapper -->

<div class="spacer spacer-big"></div>

</div> <!-- END .section-inner-->       </section>
        <!-- TEAM -->       

        <div class="spacer spacer-big"></div>

        <!-- CONTACT -->
       <section id="4" class="no-padding">
               <div class="section-inner">



    <div class="wrapper">



        <div class="section-title">

            <h2>Contactenos</h2>

            <div class="seperator size-small"><span></span></div>

            <h3 class="subtitle">Utilice este formulario para contactar con nuestro equipo. Le enviaremos una respuesta a la brevedad.</h3>

        </div>



        <div class="column-section clearfix">

            <div class="column one-half">

                <form id="contact-form" class="checkform" action="#" target="contact-send.php" method="post" >



                    <div class="form-row clearfix">

                        <label for="name" class="req">Nombre</label>

                        <div class="form-value"><input type="text" name="name" class="name" id="name" value="" /></div>

                    </div>



                    <div class="form-row clearfix">

                        <label for="email" class="req">Email</label>

                        <div class="form-value"><input type="text" name="email" class="email" id="email" value="" /></div>

                    </div>



                    <div class="form-row clearfix textbox">

                        <label for="message" class="req">Mensaje</label>

                        <div class="form-value"><textarea name="message" class="message" id="message" rows="15" cols="50"></textarea></div>

                    </div>



                    <div id="form-note">

                        <div class="alert alert-error">

                            <strong>Error</strong>:Por favor, compruebe sus entradas !

                        </div>

                    </div>



                    <div class="form-row form-submit">

                        <input id="submit_form" type="submit" name="submit_form" class="submit" value="Enviar" />

                    </div>


                </form>


            </div>



            <div class="column one-half last-col contact">

                <h4 class="subtitle">Tupar Viajes y Turismo en contacto</h4>

                <p>

                    Para saber más sobre lo que podemos hacer por usted,por favor no dude en ponerse en contacto.

                </p>

                <div class="spacer spacer-small"></div>

                <h4 class="subtitle">Oficina de Tupar Viajes y Turismo</h4>

                <div class="spacer spacer-mini"></div>

                <div class="one-fourth column">

                    <p>

                        25 de mayo 268<br>

                        Tandil 7000<br>

                        Argentina

                    </p>

                    <p>

                        +61 2 8853 5353<br>
                        <a href="mailto:tuparvt@gmail.com">tuparvt@gmail.com</a>

                    </p>

                </div>

                
            </div>

        </div>



    </div> <!-- END .wrapper-->



    <div class="spacer spacer-big"></div>



    <!-- GOOGLE MAP -->

    <div id="map_canvas"></div>

    <!-- GOOGLE MAP -->



</div> <!-- END .section-inner-->

<script type="text/javascript">
    $(document).ready(function () {
        $('#submit_form').click(function () {
            setTimeout(function(){
                $("input[type=text]").val('');
                $("textarea").val('');
                return true; //This will call the server side code for delete button.
            }, 2000);
        });
    });
</script>       </section>
        <!-- CONTACT -->
        


        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>