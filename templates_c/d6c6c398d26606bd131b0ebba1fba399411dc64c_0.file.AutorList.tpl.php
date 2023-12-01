<?php
/* Smarty version 4.2.1, created on 2023-10-27 22:11:32
  from 'C:\xampp\htdocs\TPE-web2023\templates\AutorList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653c197406b345_79490116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6c6c398d26606bd131b0ebba1fba399411dc64c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-web2023\\templates\\AutorList.tpl',
      1 => 1697579166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:autForm.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_653c197406b345_79490116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_SESSION['USER_ID']))) {
$_smarty_tpl->_subTemplateRender("file:autForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php }?>

<ul class="list-group">
<div class="autorContainer">
    <h2 class="autor h2">Modifique la Lista de Autores</h2>
<li class='list-group-item d-flex justify-content-between align-items-center'>
    <div class="autorTableCont">
        <table class="table table-striped">
            <thead class="autorThead">
                <tr>
                    <td>Autores</td>
                    <td>Universidad</td>
                    <td></td>

                </tr>
            </thead>
            <tbody class="autorTbody">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['autor']->value->universidad;?>
</td>
                        <?php if ((isset($_SESSION['USER_ID']))) {?>
                        <td><button><a href='editAutorform/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
' class="btn btn-info">Editar</a></button></td>
                        <td><button><a href='delete/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
' class="btn btn-danger">Eliminar</a></button></td>
                    </tr>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </li>
    </div>
    </ul>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
