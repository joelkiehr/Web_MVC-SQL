{include file="header.tpl"}


    {foreach from=$libros item=$autores}
        <ul class="list-group">
        <div class="libroContainer">
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <div class="libroData">
                <div class="dataContainer">
                <span>
                    <b>Libro:</b> {$autores->nombre} -
                    <b>Año Publicacion:</b> {$autores->anio_publicacion} -
                </span>
                </div>
            </div>
        
            <div class="btnContainer">
            {if isset($smarty.session.USER_ID)}
                <a href='showForm/{$autores->id}' class="btn btn-info">Editar</a>
                <a href='deleteLibro/{$autores->id}' class="btn btn-danger">Eliminar</a>
            {/if}
            </div>
        </li>
        </div>
        </ul>
    {/foreach}

{include file="footer.tpl"}