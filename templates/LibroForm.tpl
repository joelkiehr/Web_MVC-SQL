
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
