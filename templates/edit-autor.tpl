{include file="header.tpl"}

        <h1 class="display-5 mt-5 text-center">Editar Autor</h1>
        <div class="row justify-content-md-center">
            <form action="editautor/{$autor->id}" method="POST" class="my-4">
                <div class="row justify-content-md-center">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control" value="{$autor->nombre}" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Universidad</label>
                            <input name="universidad" type="text" class="form-control" value="{$autor->universidad}" required>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" class="btn btn-primary mt-2">Editar autor</button>
                </div>
            </form>  
        </div>


{include file="footer.tpl"}
