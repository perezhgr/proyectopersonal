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
    {foreach from=$Ciudad item=ciudad}
    <div class="section-title"  id="4">
        <h2>Experiencias de nuestros viajeros</h2>
        <div class="seperator size-small"><span></span></div>
        <h4 class="subtitle">{$ciudad.nombre_ciudad} • {$ciudad.nombre_pais}</h4>
    </div>
    {/foreach}
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
        
        <div class="column one-thirds align-left sr-animation sr-animation-frombottom" data-delay="800">
            <div class="team-pic">
                {foreach from=$Count item=count}
                <h4>Comentarios ({$count.cantidad})</h4></br>
                {/foreach}
                {foreach from=$Comentario item=comentario}
                 <dt class="even">
                 <a ><b>{$comentario.nombre_persona}&nbsp•</b></a>&nbsp
                    <span>{$comentario.fecha|date_format:"%e %B, %Y"}&nbsp•</span>
                    <span>({$comentario.condicion})</span>
                 </dt>
                <p class="text-left"><strong>•&nbsp</strong>{$comentario.texto}</p>
                <br>
                {/foreach}
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
   
{include file="footer.tpl"}