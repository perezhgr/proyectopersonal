<?php /* Smarty version Smarty-3.1.14, created on 2014-11-21 16:00:56
         compiled from "./templates/modalvideo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067098626545e20f680a4c4-69191415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a43beedba85ae4b3c40cd0e3bc6381b5b24afe6' => 
    array (
      0 => './templates/modalvideo.tpl',
      1 => 1416582045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067098626545e20f680a4c4-69191415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545e20f684e2e2_59995986',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545e20f684e2e2_59995986')) {function content_545e20f684e2e2_59995986($_smarty_tpl) {?>          <!-- Modal de video -->
          <i style="cursor:pointer;" class="fa fa-play-circle fa-5x zoom" data-toggle="modal" data-target=".bs-example-modal-lg1"></i>
          <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Tu sueño hecho realidad...</h4>
                </div>
                <div class="modal-body">
                  <div class="span8">
                    <div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
                      <iframe src="//www.youtube.com/embed/4puZ4IfaKSM?autoplay=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin Modal de video -->
<?php }} ?>