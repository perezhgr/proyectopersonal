<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./fonts/favicon.ico">

    <title>Viajes y Turismo</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS para de los iconos-->
    <link href="./fonts/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <body>
    <div id="top" class="site-wrapper">

      <div class="site-wrapper-inner">
        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand" >Tupar viajes y turismo</h1>
              <ul class="nav masthead-nav">
                <li class="active"><a href="#lgdestacados"><i class="fa fa-home fa-2x" ></i></a></li>
                {section name=secciones loop=$Secciones}
                <li><a href="#">{$Secciones[secciones]['nombre_seccion']}</a></li>
                {/section}
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
      
      <div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
              <h1 id="lgdestacados">Lugares destacados</h1></br></br>

                  <div class="col-md-4">
                      <img class="img-circle" src="img/amsterdam-2x.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3>Amsterdam</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div>

                  <div class="col-md-4">      
                       <img class="img-circle" src="img/capetown-2x.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                       <h3>Capetown</h3>
                       <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> 
                  </div>
                  
                  <div class="col-md-4">   
                       <img class="img-circle" src="img/copenhagen-2x.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                       <h3>Copenhagen</h3>
                       <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p><br><br><br>
                  </div>
                  
                  <div class="col-md-4">
                      <img class="img-circle" src="img/hillsong-barcelona.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3>Barcelona</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div>


                  <div class="col-md-4">
                      <img class="img-circle" src="img/hillsong-germany-location.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3>Alemania</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div>

                  <div class="col-md-4">
                      <img class="img-circle" src="img/kiev-2x.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3>Kiev/Moscu</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p><br><br><br>
                  </div>

                  <div class="col-md-4">
                      <img class="img-circle" src="img/locations-la.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3>Los Angeles</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div>                  
                  <div class="col-md-4">
                      <img class="img-circle" src="img/london-2x.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3>Londres</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div>                  

                  <div class="col-md-4">
                      <img class="img-circle" src="img/nyc-2x.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3>Nueva York</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p><br><br><br>
                  </div>

                  <div class="col-md-4">
                      <img class="img-circle" src="img/paris-2x.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3>Paris</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div>

                  <div class="col-md-4">
                      <img class="img-circle" src="img/stockholm-2x.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3>Estocolmo</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div>

                  <div class="col-md-4">
                      <img class="img-circle" src="img/sydney-2x.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h3 >Sidney</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euimdod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p><br><br><br>
                  </div>                  
           </div>
        </div>
      </div>
</div>      
<footer>
  
<div class="footer2">
    <div class="cushion-lg">
      <div class="container">  
        <div class="row"> 
          <div class="col-md-2">         
            <img class="img-rectangle" src="img/hugo1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
           
            
          </div>  
          <div class="col-md-10">                 
            <h3 >Tupar Viajes y Turismo</h3>
            <p>Somos una empresa de viajes y turismo, en Tandil, Argentina. Nos apasiona. Somos un equipo de soñadores.Estamos cambiando la manera de viajar a través de la alta calidad y confiabilidad de nuestros servicios.Planifique su viaje.Viajemos juntos.</p>
          </div>
          
        </div><br><br><br><br><br>
        <div class="row">
            <div class="col-md-3" >
              <i class="fa fa-map-marker fa-4x"></i>
              <p>Argentina - Tandil - Codigo postal 7000</p>
            </div>
            <div class="col-md-3" >
              <i class="fa fa-phone fa-4x"></i>
              <p>+54 11 4899-7000</p>
            </div>
            <div class="col-md-3" >
              <i class="fa fa-envelope fa-4x"></i>
              <p>tuparviajesyturismo@gmail.com</p>
            </div>
            <div class="col-md-3" >
                <i class="fa fa-mobile fa-4x"></i>
                <i class="fa fa-laptop fa-4x"></i>  
                <i class="fa fa-tablet fa-4x"></i> 
                <p>www.tuparviajesyturismo.com</p> 
            </div>            
        </div>
    </div>
</div>

  <div class="midnight">
    <div class="cushion-lg">
      <div class="container">  
        <div class="row"> 
          <div class="col-md-4 col-md-offset-4">         
            <a class="back-to-top" href="#top">
           <i class="fa fa-angle-double-up fa-5x" ></i> 
            </a>
          </div>          
        </div>
      </div>
    </div>
  </div>
</footer>


        
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.min.jsbootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
    <script src="./js/SmoothPageScrolling.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
  </body>


</html>