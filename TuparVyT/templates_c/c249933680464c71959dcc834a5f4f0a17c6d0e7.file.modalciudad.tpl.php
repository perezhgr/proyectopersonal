<?php /* Smarty version Smarty-3.1.14, created on 2014-11-08 14:56:37
         compiled from "./templates/modalciudad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:402362491545e21154c3053-23077663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c249933680464c71959dcc834a5f4f0a17c6d0e7' => 
    array (
      0 => './templates/modalciudad.tpl',
      1 => 1414506617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402362491545e21154c3053-23077663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Ciudad' => 0,
    'Imagen' => 0,
    'imagen' => 0,
    'ciudad' => 0,
    'Nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545e2115645f15_57704110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545e2115645f15_57704110')) {function content_545e2115645f15_57704110($_smarty_tpl) {?>                  <!-- CAROUSEL-->
                  <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
                  <div class="row">
                    
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        
                        <div class="carousel-inner">
                        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Imagen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']++;
?>
                        
                          <div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['img']['iteration']==1){?> active<?php }?>">

                            <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="" class="img-responsive img-thumbnail" width="300px" height="300px">
                            <div class="carousel-caption">
                              <h3><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</h3>
                            </div>
                          </div>                          
                          <?php } ?>   
                        </div>                        

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="icon-next"></span>
                        </a>
                      </div>
                    </div>
                                     
                  </div>
                  <!-- FIN CAROUSEL-->

                  <!-- DATOS CIUDAD-->
                        
                  <div class="  row">                                    
                    <div class="col-lg-4  text-center">                      
                      <h3>Lugar<h3><h4><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</h4>
                      </div>
                      <div class="col-lg-4  text-center">
                        <h3>Precio</h3><h4>$&nbsp;<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
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
                              <button type="button" class="btn btn-primary" onClick="getComentarioCiudad(<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
)">
                              <i class="fa fa-comments fa-3x"></i>&nbsp;
                              </button><br>
                              <small>
                                <?php if (!isset($_smarty_tpl->tpl_vars['Nombre']->value)){?>
                                <em>* Si desea dejar su comentario debera   registrarse primero.
                                </em>
                                <?php }?>
                              </small>
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

                      <!-- CAROUSEL CICLICO-->                                    
                      <script type="text/javascript">
                      
                        $('.carousel').carousel({
                          interval: 2800
                        })
                        
                        $('.carousel').carousel({
                          pause: "hover"
                        })
                      </script>
                      <!-- FIN CAROUSEL CICLICO-->                                    <?php }} ?>