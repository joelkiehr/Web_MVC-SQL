<?php
/* Smarty version 4.2.1, created on 2023-10-17 04:02:11
  from 'C:\xampp\htdocs\TPe-web2023\templates\autForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652deb234514f7_90765761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5ec01defe9ed81ec401f0757dfba6e22cdc7496' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPe-web2023\\templates\\autForm.tpl',
      1 => 1697508130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652deb234514f7_90765761 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input required name="nombre" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Universidad</label>
        <input required name="universidad" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
</form><?php }
}
