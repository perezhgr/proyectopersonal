<?php /* Smarty version Smarty-3.1.14, created on 2014-08-29 22:48:16
         compiled from "./templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8811913153fdfc048d7ab4-78605702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7bb102d4bad95e5a5dfe049d4ba60ee91b1c57' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1409345242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8811913153fdfc048d7ab4-78605702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53fdfc04914400_62291269',
  'variables' => 
  array (
    'Contacto' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fdfc04914400_62291269')) {function content_53fdfc04914400_62291269($_smarty_tpl) {?><div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Contacto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
              <h1 id="lgdestacados"><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_categoria'];?>
</h1></br>
                  <h4><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
<h4><br>
           <?php } ?>       
                  <div class="col-md-6 col-md-offset-3">
                    <form class="form-signin" role="form">
                     <button class="btn btn-lg btn-primary btn-block" ><i class="fa fa-pencil-square-o"></i></button> 
                      <input type="text" class="form-control" placeholder="Nombre" required autofocus><br>
                      
                      <button class="btn btn-lg btn-primary btn-block" ><i class="fa fa-envelope "></i></button>
                      <input type="email" class="form-control" placeholder="Email" required autofocus><br>
                      <button class="btn btn-lg btn-primary btn-block" ><i class="fa fa-pencil"></i></button>  
                      <textarea rows="10" type="text" class="form-control" placeholder="Escriba se mensaje" required></textarea><br>
                      <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form><br><br><br>
                  </div>                  
          
          </div>
        </div>
</div>




        <?php }} ?>