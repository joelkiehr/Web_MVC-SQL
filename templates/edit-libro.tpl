{include file="header.tpl"}


<h1 class="display-5 mt-5 text-center">Editar Libros</h1>
        <div class="row justify-content-md-center">
            <form action="editlibros/{$libros->id}" method="POST" class="my-4">
                <div class="row justify-content-md-center">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" value="{$libros->nombre}" class="form-control">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre del Autor</label>
                            <input name="nombre_del_autor" type="text" class="form-control" value="{$libros->nombre_del_autor}" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Año de Publicacion</label>
                            <input name="anio_publicacion" type="text" class="form-control" value="{$libros->anio_publicacion}" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input name="descripcion" type="text" class="form-control" value="{$libros->descripcion}" required>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" class="btn btn-primary mt-2">Editar autor</button>
                </div>
            </form>  
        </div>

{include file="footer.tpl"}