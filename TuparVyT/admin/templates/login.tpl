{include file="header.tpl"}
  <body>

    <div class="container">

      <!-- Typography
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 class="text-center">Administracion del Sitio Tupar VyT</h1>
            </div>
          </div>
        </div>

      <!-- Forms
      ================================================== -->
        <div class="row">
        <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <div class="well bs-component">
              <form  id="formlogin" class="form-horizontal" method="POST">
                <fieldset>
                  <legend>Por favor, inicie sesion</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="email" placeholder="yyy@zzz.com" name="mail" ><br>
                      {if isset($ErrorUsuario)}
                        <strong class="error">{$ErrorUsuario}</strong>
                      {else}
                        <strong  style="display:none" class="error">{$ErrorUsuario}</strong>
                      {/if}
                      {if isset($ErrorAdmin)}
                        <strong class="error">{$ErrorAdmin}</strong>
                      {else}
                        <strong  style="display:none" class="error">{$ErrorAdmin}</strong>
                      {/if}
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" ><br>
                      {if isset($ErrorPass)}
                        <strong class="error">{$ErrorPass}</strong>
                      {else}
                        <strong  style="display:none" class="error">{$ErrorPass}</strong>
                      {/if}
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-3 col-lg-offset-9">
                      <button id="signin" type="submit" class="btn btn-primary btn-lg">Iniciar</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
          

        </div>
      </div>
      
{include file="footer.tpl"}      