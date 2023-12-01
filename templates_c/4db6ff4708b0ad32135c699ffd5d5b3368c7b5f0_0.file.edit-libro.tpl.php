<?php
/* Smarty version 4.2.1, created on 2023-10-17 23:43:19
  from 'C:\xampp\htdocs\TPe-web2023\templates\edit-libro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652efff7c27462_52957406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4db6ff4708b0ad32135c699ffd5d5b3368c7b5f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPe-web2023\\templates\\edit-libro.tpl',
      1 => 1697577726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652efff7c27462_52957406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1 class="display-5 mt-5 text-center">Editar Libros</h1>
        <div class="row justify-content-md-center">
            <form action="editlibros/<?php echo $_smarty_tpl->tpl_vars['libros']->value->id;?>
" method="POST" class="my-4">
                <div class="row justify-content-md-center">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre del Autor</label>
                            <input name="nombre_del_autor" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['libros']->value->nombre_del_autor;?>
" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Año de Publicacion</label>
                            <input name="anio_publicacion" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['libros']->value->anio_publicacion;?>
" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input name="descripcion" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['libros']->value->descripcion;?>
" required>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" class="btn btn-primary mt-2">Editar autor</button>
                </div>
            </form>  
        </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
