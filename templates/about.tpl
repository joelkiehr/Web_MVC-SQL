{include file="header.tpl"}

<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Nombre del Libro</th>
        <th>Año de publicación del libro</th>
        
    </thead> 
    
    {foreach from=$libros item=$libro}

        <tr>
        <td> 
            <span> 
                <td>{$libro->nombre|truncate:25}</td> 
                <td>{$libro->anio_publicacion|truncate:40}</td>           
            </span> 
        </td>
        </tr>
    {/foreach}
        
</table>


{include file="footer.tpl"}
