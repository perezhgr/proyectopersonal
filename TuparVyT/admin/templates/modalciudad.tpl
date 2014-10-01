                      <!--INICIO MODAL CERRAR--> 
                      <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">Confirmacion de eliminacion</h4>
                            </div>

                            <div class="modal-body">
                              <p>Vas a borrar una ciudad ; este procedimiento es irreversible.</p>
                              <p>¿Quieres continuar?</p>
                              <p class="debug-url"></p>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              <button onClick="BorrarCiudad({$ciudad.id_ciudad})" class="btn btn-danger danger">Borrar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--FIN MODAL CERRAR--> 