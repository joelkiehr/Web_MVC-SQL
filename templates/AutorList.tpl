{include file="header.tpl"}

{if isset($smarty.session.USER_ID)}
{include file="autForm.tpl"} 
{/if}

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
                {foreach from=$autores item=$autor}
                    <tr>
                        <td>{$autor->nombre}</td>
                        <td>{$autor->universidad}</td>
                        {if isset($smarty.session.USER_ID)}
                        <td><button><a href='editAutorform/{$autor->id}' class="btn btn-info">Editar</a></button></td>
                        <td><button><a href='delete/{$autor->id}' class="btn btn-danger">Eliminar</a></button></td>
                    </tr>
                    {/if}
                {/foreach}
                </tbody>
            </table>
        </div>
    </li>
    </div>
    </ul>


{include file="footer.tpl"}
