<?php
/* Smarty version 4.2.1, created on 2023-10-17 05:02:05
  from 'C:\xampp\htdocs\TPe-web2023\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652df92d742c96_36221039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cbd361488ebed639077d7db3282172a0ab074eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPe-web2023\\templates\\home.tpl',
      1 => 1697507279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652df92d742c96_36221039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'autores');
$_smarty_tpl->tpl_vars['autores']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autores']->value) {
$_smarty_tpl->tpl_vars['autores']->do_else = false;
?>
        <ul class="list-group">
        <div class="libroContainer">
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <div class="libroData">
                <div class="dataContainer">
                <span>
                    <b>Libro:</b> <?php echo $_smarty_tpl->tpl_vars['autores']->value->nombre;?>
 -
                    <b>Año Publicacion:</b> <?php echo $_smarty_tpl->tpl_vars['autores']->value->anio_publicacion;?>
 -
                </span>
                </div>
            </div>
        
            <div class="btnContainer">
            <?php if ((isset($_SESSION['USER_ID']))) {?>
                <a href='showForm/<?php echo $_smarty_tpl->tpl_vars['autores']->value->id;?>
' class="btn btn-info">Editar</a>
                <a href='deleteLibro/<?php echo $_smarty_tpl->tpl_vars['autores']->value->id;?>
' class="btn btn-danger">Eliminar</a>
            <?php }?>
            </div>
        </li>
        </div>
        </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
