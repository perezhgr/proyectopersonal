<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap version 3.1 Modal with remote content</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap core CSS -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" media="screen">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
      <![endif]-->
    </head>
    <body>
      {foreach from=$Ciudad item=i}
     
      <a data-toggle="modal" class="btn btn-primary" title="Consultar" id="{$i.id_ciudad}">Ver detalle ciudad</a>
      {/foreach}

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          
          
          </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
      </div> <!-- /.modal -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/remote.js"></script>
    </body>
  </body>