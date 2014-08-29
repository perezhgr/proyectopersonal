<?php /* Smarty version Smarty-3.1.14, created on 2014-08-30 00:45:49
         compiled from "./templates/experiencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9058325475400f32bc09e96-09701929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243010d31b704efd28a10619672f85d3918bcf59' => 
    array (
      0 => './templates/experiencia.tpl',
      1 => 1409352345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9058325475400f32bc09e96-09701929',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5400f32bc8f135_40583244',
  'variables' => 
  array (
    'Subcategoria' => 0,
    'i' => 0,
    'Imagen' => 0,
    'Experiencia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5400f32bc8f135_40583244')) {function content_5400f32bc8f135_40583244($_smarty_tpl) {?><div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Subcategoria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
              <h1 ><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_categoria'];?>
</h1></br>
                  <h4><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
<h4><br>
           <?php } ?>    
        </div>              
      </div>              
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Imagen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
    <div class="bs-example">
    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner">

        <div class="item active">
        
          <img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['path'];?>
" alt="First slide image">
          <div class="carousel-caption">
            <h3><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_ciudad'];?>
</h3>  
          </div>
        </div>

        
      </div><?php } ?>
      
      <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
    </div>
      
    </div>
    <div class="col-md-3">
    </div>
</div></br></br></br>

<div class="row">
    <div class="col-md-12">
    <table class="table table-hover">
    <h4>Comentarios de nuestros viajeros</h4></br>
    <thead>
      <tr>
         <th></th>
         <th></th>
         <th></th>
         <th></th>
      </tr>
   </thead>
   <tbody>
  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Experiencia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
      <tr>
         <td><i class="fa fa-check"></i></td> 
         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_persona'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fecha'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['texto'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['condicion'];?>
</td>
      </tr>
   <?php } ?>   
   </tbody>
   </table>
   <hr>
   </div>
</div><?php }} ?>