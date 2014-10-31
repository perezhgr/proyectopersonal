          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Inicia sesion</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" method="POST">
                    <fieldset>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="mail" placeholder="Mail" name="mail">
                          {if isset($ErrorUsuario)}
                          <strong class="error">{$ErrorUsuario}</strong>
                          {else}
                          <strong style="display:none" class="error">{$ErrorUsuario}</strong>
                          {/if}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                          <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
                          {if isset($ErrorPass)}
                          <strong class="error">{$ErrorPass}</strong>
                          {else}
                          <strong style="display:none" class="error">{$ErrorPass}</strong>
                          {/if}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                          <button id="iniciar" type="submit" data-toggle="tooltip" data-placement="left" title="Iniciar sesion" class="btn btn-primary btn-md btn-block"><i id="signin"class="fa fa-sign-in fa-2x"></i>&nbsp;</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div><br>