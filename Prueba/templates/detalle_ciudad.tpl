{include file="header.tpl"}
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
    {foreach from=$Ciudad item=ciudad}
    <div class="section-title"  id="3">
        <h2>Detalles del destino</h2>
        <div class="seperator size-small"><span></span></div>
        <h4 class="subtitle">•&nbsp{$ciudad.nombre_ciudad}</h4>
        <input type="submit" name="" class="submit" value="Comprar"/><br>
        <!--<input type="submit" name="" class="submit" value="Ver comentarios"/>-->
    </div>
    <div class="column-section clearfix">
    {foreach from=$Imagen item=imagen}
    <div class="column one-third align-center sr-animation sr-animation-frombottom" data-delay="200">
            <div class="team-pic">
                <div class="imgoverlay text-light">
                    <img src="{$imagen.path}" alt="Amsterdam">
                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo">
                    <a href="detalle_viaje.html">Ver mas</a>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    {/foreach}
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
            	<p>{$ciudad.duracion}</p>
            	<h4>Precio</h4>
            	<p>{$ciudad.precio}</p>
            	<h4>Descripcion</h4>
            	<p>{$ciudad.descripcion}</p>
                {include file="incluye.tpl"}
            </div><br>
            <div class="spacer spacer-big"></div>     
        </div>    
    
{/foreach}
</div> <!-- END .wrapper -->
</div> <!-- END .wrapper -->
</div> <!-- END .section-inner-->       </section>
        <!-- TEAM -->      
{include file="footer.tpl"}