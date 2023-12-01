{include file="header.tpl"}
{if isset($smarty.session.USER_ID)}
    {include file="LibroForm.tpl"}
{/if}


<table class="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Nombre del autor</th>
        <th>Año de Publicacion</th>
        <th>Descripcion</th>
    </thead>     

        {foreach from=$libros item=$libro}
    <tr>
        <span>  
            <td>{$libro->nombre|truncate:35}</td>
            <td>{$libro->nombre_del_autor|truncate:35}</td>
            <td>{$libro->anio_publicacion|truncate:35}</td>
            <td>{$libro->descripcion|truncate:1000}</td> 
                {if isset($smarty.session.USER_ID)}
                <td><a href='editLibroform/{$libro->id}' type='button' class='btn btn-info'>Editar</a></td>
                <td><a href='eliminar/{$libro->id}' type='button' class='btn btn-danger'>Borrar</a></td>
                {/if}
        </span> 
    </tr>
{/foreach}

</table>
    {include file="footer.tpl"}
