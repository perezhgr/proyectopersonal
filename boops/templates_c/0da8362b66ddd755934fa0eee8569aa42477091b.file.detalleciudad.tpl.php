<?php /* Smarty version Smarty-3.1.14, created on 2014-09-01 20:58:36
         compiled from "./templates/detalleciudad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66690556754036dfe1b3104-82178605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da8362b66ddd755934fa0eee8569aa42477091b' => 
    array (
      0 => './templates/detalleciudad.tpl',
      1 => 1409597580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66690556754036dfe1b3104-82178605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54036dfe20ac38_78864459',
  'variables' => 
  array (
    'Ciudad' => 0,
    'i' => 0,
    'Imagen' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54036dfe20ac38_78864459')) {function content_54036dfe20ac38_78864459($_smarty_tpl) {?><div id="contenido">
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	<!-- Titulo -->
	<div class="row">
		<div class="col-md-12">
			<div class="bs-docs-section">
				<h1>Detalle del Paquete</h1></br>
				<h2><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_ciudad'];?>
<h2><br>       
			</div>              
		</div>              
	</div></br>

<!-- Carousel -->
<div class="row">
  <div class="col-md-10">
   <div id="myCarousel" class="carousel">
    <div class=""carousel-inner>
      <div class="item active">
        <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Imagen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
        <div style="height:30%; width:30%; float: left; margin-right: 10px;">
          <img alt="320x240" src="<?php echo $_smarty_tpl->tpl_vars['j']->value['path'];?>
" class="img-thumbnail" data-toggle="tooltip" data-placement="top" title=""/>
        </div>
        <?php } ?>
      </div> 
    </div>    

   </div>
  </div>
  <div class="col-md-1">
      <button type="button" class="btn btn-info btn-lg btn-block">
      <i class="fa fa-shopping-cart fa-2x"></i></button></div>
      <div class="col-md-1">      	
      	<a href="" id="atras"><i class="fa fa-table fa-4x"></i>
</a>
      </div>

  </div>
</div></br></br>
<!-- Fin de carousel -->	

		<div class="row">
			<div class="col-md-12">
			<h4 class="text-left"><strong>Duracion:</strong>&nbsp<?php echo $_smarty_tpl->tpl_vars['i']->value['duracion'];?>
</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			<h4 class="text-left"><strong>Precio</strong>:&nbsp<?php echo $_smarty_tpl->tpl_vars['i']->value['precio'];?>
</h4>
			</div>
		</div>

		<div class="row">	
			<div class="col-md-12">
			<h4 class="text-left"><strong>Descripcion:</strong>&nbsp<?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</h4>
			</div>
		</div>
	<?php } ?>
		<!-- Fin Sucategoria -->
</div>

<?php echo $_smarty_tpl->getSubTemplate ("incluye.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>