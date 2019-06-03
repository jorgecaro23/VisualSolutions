<?php include "header.php" ?>
<div class="container">
    <center>
        <h1>Registro de Usuario</h1>
    </center>
    <br><br>
    <div class="row justify-content-center">
        <form class="form-group border-top jumbotron w-75 h-25 d-inline-block">
            <div class="row">
                <div class="col">
                    <h4>Nombre:</h4>
                    <input class="form-control" type="text" name="nombre">
                    <br>
                </div>
                <div class="col">
                    <h4>Apellido:</h4>
                    <input class="form-control" type="text" name="apellido">
                    <br>
                </div>
                <div class="col">
                    <h4>No. de Documento:</h4>
                    <input class="form-control" type="number" name="documento">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Correo Electrónico</h4>
                    <input class="form-control" type="email" name="correo">
                    <br>
                </div>
                <div class="col">
                    <h4>Teléfono</h4>
                    <input class="form-control" type="number" name="telefono">
                    <br>
                </div>
                <div class="col">
                    <h4>Dirección</h4>
                    <input class="form-control" type="text" name="direccion">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Rol de usuario</h4>
                    <select class="form-control" name="rol">
                        <option>--Selecionar una opción--</option>
                        <option>Administrador</option>
                        <option>Administrador(e)</option>
                        <option>Empleado</option>
                        <option>Cliente</option>
                    </select>
                </div>
                <div class="col">
                    <h4>Contraseña:</h4>
                    <input class="form-control" type="password" name="contraseña">
                </div>
                <div class="col">
                    <h4>Repetir contraseña:</h4>
                    <input class="form-control" type="password" name="Rcontraseña">
                </div>
                <br>
            </div>
            <br>
            <button class="btn btn-danger float-left" type="reset">Limpiar</button>
            <button class="btn btn-success float-right" type="submit" name="agregar">Agregar</button>
        </form>
    </div>
</div>

