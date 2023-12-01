<?php
/* Smarty version 4.2.1, created on 2023-10-17 04:05:56
  from 'C:\xampp\htdocs\TPe-web2023\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652dec049e4213_90498809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e401e54d7fdc596efc33b8831701da3dd636c608' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPe-web2023\\templates\\success.tpl',
      1 => 1697142152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652dec049e4213_90498809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div class="alert alert-success container text-center " role="alert">
        <h4 class="alert-heading">Acción exitosa</h4>
        <hr>
        <a href="<?php echo BASE_URL;?>
" class="btn btn-light">Volver a la pagina principal</a>
    </div> 
<?php } else { ?>
    <div class="alert alert-danger container text-center " role="alert">
        <h4 class="alert-heading">Error</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
        <hr>
        <a href="<?php echo BASE_URL;?>
" class="btn btn-light">Volver a la pagina principal</a>
    </div> 
<?php }?>
  
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
