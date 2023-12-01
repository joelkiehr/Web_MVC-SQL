{include file="header.tpl"}

<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Nombre de los libros</th>
        <th>Nombres de los autores</th>
        <th>Año de publicacion</th>
        <th>Descripcion</th>
    </thead>     

        {foreach from=$libros item=$libro}
    <tr>
        <td> 
            <span> 
                <td>{$libro->nombre|truncate:25}</td> 
                <td>{$libro->nombre_del_autor|truncate:35}</td>
                <td>{$libro->anio_publicacion|truncate:25}</td> 
                <td>{$libro->descripcion|truncate:1000}</td>                
            </span> 
        </td>
                
    </tr>
{/foreach}

</table>

{include file="footer.tpl"}