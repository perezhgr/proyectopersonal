<?php /* Smarty version Smarty-3.1.14, created on 2014-10-28 13:12:25
         compiled from "./templates/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1478133041544d43951fdd86-28686305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afbabd2d7104bba99deb709b2f3809e75b1e519' => 
    array (
      0 => './templates/modal.tpl',
      1 => 1414457298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1478133041544d43951fdd86-28686305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_544d439532bcc8_14408350',
  'variables' => 
  array (
    'Ciudad' => 0,
    'Imagen' => 0,
    'imagen' => 0,
    'ciudad' => 0,
    'Nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d439532bcc8_14408350')) {function content_544d439532bcc8_14408350($_smarty_tpl) {?>                  <!-- CAROUSEL-->
                  <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
                  <div class="row">
                    
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Imagen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']++;
?>
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['img']['iteration']==1){?>active<?php }?>"></li>
                          <?php } ?>   
                        </ol>

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