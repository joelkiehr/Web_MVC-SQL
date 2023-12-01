<?php
/* Smarty version 4.2.1, created on 2023-10-17 22:34:00
  from 'C:\xampp\htdocs\TPe-web2023\templates\LibroForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652eefb840a582_42090029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b6009eb73ab90a7a3b7edceb883751f6a6ca932' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPe-web2023\\templates\\LibroForm.tpl',
      1 => 1697574808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652eefb840a582_42090029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="agregar" method="POST" class="my-4">
    <div class="row">
        <div class="col-2">
            <div class="form-group">
                <label>Nombre</label>
                <input required name="nombre" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="form-group">
            <label>Nombre del autor</label>
            <input required name="nombre_del_autor" type="text" class="form-control">
        </div>
    </div>
    
    <div class="col-2">
        <div class="form-group">
            <label>Año de Publicacion</label>
            <input required name="anio_publicacion" type="number" class="form-control">
        </div>
    </div>

    <div class="col-5">
        <div class="form-group">
            <label>Descripcion</label>
            <input required name="descripcion" type="text" class="form-control">
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
<?php }
}
