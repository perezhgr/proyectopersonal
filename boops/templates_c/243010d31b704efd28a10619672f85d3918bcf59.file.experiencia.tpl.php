<?php /* Smarty version Smarty-3.1.14, created on 2014-09-01 00:56:19
         compiled from "./templates/experiencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137001018254022192ccbc09-47846342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243010d31b704efd28a10619672f85d3918bcf59' => 
    array (
      0 => './templates/experiencia.tpl',
      1 => 1409525775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137001018254022192ccbc09-47846342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54022192d47d16_47749572',
  'variables' => 
  array (
    'Subcategoria' => 0,
    'i' => 0,
    'Imagen' => 0,
    'img' => 0,
    'Experiencia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54022192d47d16_47749572')) {function content_54022192d47d16_47749572($_smarty_tpl) {?><!-- Sucategoria -->
<div class="row">
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
 </div></br></br>
 <!-- Fin Sucategoria -->

<!-- Carousel -->
<div class="row" id="lugar">
  <div class="col-md-10">
   <div id="myCarousel" class="carousel">
    <div class=""carousel-inner>
      <div class="item active">
        <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Imagen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
        <div style="height:30%; width:30%; float: left; margin-right: 10px;">
        <a href="#a"><img alt="320x240" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['path'];?>
" class="img-thumbnail" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['img']->value['nombre_ciudad'];?>
"/></a>  
        </div>        
        <?php } ?>
      </div> 
    </div>    
   </div>
  </div>
  <div class="col-md-2">
    <button type="button" class="btn btn-danger btn-lg btn-block">Comprar</button>
  </div>
</div></br></br></br></br>
<!-- Fin de carousel -->

<!-- Tabla con los comentarios -->
<div class="row">
  <div class="col-md-12">
    <table class="table table-hover ">
      <h4>Comentarios de nuestros viajeros</h4></br>
      <thead id="a">
        <tr>
         <th></th>
         <th class="text-center"><i class="fa fa-male fa-2x"></i></i></th>
         <th class="text-center"><i class="fa fa-calendar fa-2x"></i></th>
         <th class="text-center"><i class="fa fa-comments fa-2x"></i></th>
         <th class="text-center"><i class="fa fa-eye fa-2x"></i></th>         
         <th class="text-center"><a href="#lugar"><i class="fa fa-map-marker fa-2x"></i></a></th>         
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
       <td><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_ciudad'];?>
</td>
     </tr>
     <?php } ?>   
   </tbody>
 </table>
</div>
</div>
<hr>
</br></br></br></br>
<!-- Fin tabla --><?php }} ?>