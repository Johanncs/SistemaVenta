<?php
include "Views/Templates/header.php"; ?>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Usuario</li>
</ol>
<button class="btn btn-primary mb-2" type="button" onclick="frmUsuario();">Nuevo</button>
<table class="table table-light" id="tblUsuarios">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Caja</th>
            <th>Estado</th>
            <th></th>
        </tr>
    </thead>
</table>
<div class="modal fade" id="nuevo_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Nuevo usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="frmUsuario">
                    <div class="form-group">
                        <label for="usuario">Text</label>
                        <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="clave">Contraseña</label>
                        <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <label for="confirmar">Confirmar Contraseña</label>
                        <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar Contraseña">
                    </div>
                    <div class="form-group">
                        <label for="caja">Caja</label>
                        <select name="caja" id="caja" class="form-control">
                            <option>Text</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="button">Registrar</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?php
include "Views/Templates/footer.php";
?>