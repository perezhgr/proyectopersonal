<?php /* Smarty version Smarty-3.1.14, created on 2014-09-06 01:31:00
         compiled from "./templates/cover.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1508855562540a46fa45be84-78888460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39671cd2a7bcedb789c05aa243d6a959ffd58a1f' => 
    array (
      0 => './templates/cover.tpl',
      1 => 1409959854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1508855562540a46fa45be84-78888460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_540a46fa49b609_99299436',
  'variables' => 
  array (
    'Menu' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540a46fa49b609_99299436')) {function content_540a46fa49b609_99299436($_smarty_tpl) {?>    <!-- HEADER -->
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

                    <img src="img/sidney.jpg"   alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

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

                    <img src="img/paris.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">



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

                    <img src="img/vancouver.jpg"   alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                
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



</div> <!-- END .section-inner -->        </section><?php }} ?>