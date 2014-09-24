<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 20:40:25
         compiled from "./templates/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185600833554220ee6b8dab1-54559864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afbabd2d7104bba99deb709b2f3809e75b1e519' => 
    array (
      0 => './templates/modal.tpl',
      1 => 1411584022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185600833554220ee6b8dab1-54559864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54220ee6c30b03_31248837',
  'variables' => 
  array (
    'Imagen' => 0,
    'imagen' => 0,
    'Ciudad' => 0,
    'ciudad' => 0,
    'Comentario' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54220ee6c30b03_31248837')) {function content_54220ee6c30b03_31248837($_smarty_tpl) {?>                  <!-- CAROUSEL-->
                  <div class="row">
                    <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Imagen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']++;
?>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['img']['iteration']==1){?>
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="..." class="img-responsive img-thumbnail" width="300px" height="300px">
                            <div class="carousel-caption">
                              <h3>Berlin</h3>
                            </div>
                          </div>
                          <?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['img']['iteration']==2){?>
                          <div class="item">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="..." class="img-responsive img-thumbnail" width="300px" height="300px">
                            <div class="carousel-caption">
                              <h3>Berlin</h3>
                            </div>
                          </div>
                          <?php }else{ ?>
                          <div class="item">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="..."class="img-responsive img-thumbnail" width="300px" height="300px">
                            <div class="carousel-caption">
                              <h3>Berlin</h3>
                            </div>
                          </div>
                        </div>
                        <?php }?>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="icon-next"></span>
                        </a>
                      </div>
                    </div>
                    <?php } ?>                    
                  </div>
                  <!-- FIN CAROUSEL-->

                  <!-- DATOS CIUDAD-->
                  <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>      
                  <div class="row">                                    
                    <div class="col-lg-4  text-center">                      
                      <h3>Lugar<h3><h4><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</h4>
                      </div>
                      <div class="col-lg-4  text-center">
                        <h3>Precio</h3><h4><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
</h4>
                      </div>
                      <div class="col-lg-4  text-center">
                        <h3>Duracion</h3><h4><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['duracion'];?>
</h4>
                      </div>
                  </div>
                      <!-- FIN DATOS CIUDAD-->                  

                      <!-- COMENTARIOS-->                  
                      <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                          <ul class="nav nav-pills nav-stacked">
                            <li class="active">
                              <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Comentario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
                              <button type="button" class="btn btn-primary" onClick="getComentarioCiudad(<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
)">
                                <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentarios'];?>
</span>
                                Ver Comentarios&nbsp;
                              </button>
                              <?php } ?>
                            </li><br><br>
                          </ul>
                          </div>
                        </div>
                      <?php } ?>
                      <div class="row">
                      <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                          <div id="comentario"></div>
                        </div>
                        <div class="col-lg-1"></div>
                      </div>
                      <!-- FIN COMENTARIOS-->                  
<?php }} ?>