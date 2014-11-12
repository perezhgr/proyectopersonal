<?php /* Smarty version Smarty-3.1.14, created on 2014-11-12 19:29:20
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1837174027545e20f68eebc0-99215081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1415816952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1837174027545e20f68eebc0-99215081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545e20f693a248_40180026',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545e20f693a248_40180026')) {function content_545e20f693a248_40180026($_smarty_tpl) {?> <style>
      #map_canvas {
        width: 100%;
        height: 500px;
        border-radius: 10px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var myLatlng = new google.maps.LatLng(-37.327413, -59.134512);
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: myLatlng,
          zoom: 17,
          scrollwheel: false,
          navigationControl: false,
          mapTypeControl: false,
          scaleControl: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
           position: myLatlng,
           map: map,
           title: 'Tupar VyT!'
       });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map_canvas"></div>
  </body>


<br><br><br>

<footer>

  <div class="footerinner wrapper align-center text-light">
    <div class="column one-third">
      <a href="#top" class="sr-button sr-buttonicon small-iconbutton" title="Back to Top">
        <i class="zoom fa fa-angle-double-up fa-3x"></i>

        <div class="spacer spacer-big"></div>
        <p class="copyright">© 2014 Todos los derechos reservados • Tupar VyT • Viajes &amp; Turismo</p>
    </div>
</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js">
    </script>
    <script type="text/javascript" src="js/SmoothPageScrolling.js"></script>
    <script type="text/javascript" src="js/detalle_ciudad.js"></script>
    <script type="text/javascript" src="js/comentario_ciudad.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="js/registro.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/logout.js"></script>
    <script type="text/javascript" src="js/mail.js"></script>
    <script type="text/javascript" src="js/sweet-alert.js"></script>  
    <script type="text/javascript" src="js/jquery.ambiance.js"></script>
    <script type="text/javascript" src="js/zoom.js"></script>        
</body>
</html><?php }} ?>