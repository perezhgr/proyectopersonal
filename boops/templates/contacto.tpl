<div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
          {foreach from=$Contacto item=i}
              <h1 id="lgdestacados">{$i.nombre_categoria}</h1></br>
                  <h4>{$i.descripcion}<h4><br>
           {/foreach}       
                  <div class="col-md-6 col-md-offset-3">
                    <form class="form-signin" role="form">
                     <button class="btn btn-lg btn-primary btn-block" ><i class="fa fa-pencil-square-o"></i></button> 
                      <input type="text" class="form-control" placeholder="Nombre" required autofocus><br>
                      
                      <button class="btn btn-lg btn-primary btn-block" ><i class="fa fa-envelope "></i></button>
                      <input type="email" class="form-control" placeholder="Email" required autofocus><br>
                      <button class="btn btn-lg btn-primary btn-block" ><i class="fa fa-pencil"></i></button>  
                      <textarea rows="10" type="text" class="form-control" placeholder="Escriba se mensaje" required></textarea><br>
                      <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form></br></br></br></br>
                  </div>                  
          
          </div>
        </div>
</div>




        