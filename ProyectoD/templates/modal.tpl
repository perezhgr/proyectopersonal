            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    {foreach from=$Ciudad item=ciudad}
                    <div class="col-sm- text-center">
                      <p>Lugar:{$ciudad.nombre_ciudad}</p><br>
                      <p>Precio:{$ciudad.precio}</p><br>
                      <p>Duracion:{$ciudad.duracion}</p><br>
                    </div>
                    {/foreach}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>