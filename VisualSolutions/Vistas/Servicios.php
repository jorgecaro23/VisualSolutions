<?php include "header.php"; ?>
<body>
<center>
    <div class="row">
        <div class="container">
            <div class="col">
                <form action="" method="">
                    <h1>Nuevo Servicio</h1><br>
                    <div class="form-row">
                        <div class="form-group col-lg-3">
                            <h4>Tipo de Servicio</h4>
                            <select class="form-control" name="TipoServicio">
                                <option>--Selecionar una opción--</option>
                                <option>Mantenimiento</option>
                                <option>Reparación</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-5">
                            <h4>Nombre del Cliente</h4>
                            <input type="text" class="form-control" name="NombreCliente" required="" placeholder="Nombre de Cliente">
                        </div>
                        <div class="form-group col-lg-4">
                            <h4>Apellido del Cliente</h4>
                            <input type="text" class="form-control" name="ApellidoCliente" required="" placeholder="Apellido del Cliente">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-3">
                            <h4>Trabajo Enviado A:</h4>
                            <input type="text" class="form-control" name="TrabajoEnviadoA" required="" placeholder="Trabajo Enviado A">
                        </div>
                        <div class="form-group col-lg-3">
                            <h4>Valor del Trabajo:</h4>
                            <input type="email" class="form-control" name="ValorTrabajo" required="" placeholder="Valor del Trabajo">
                        </div>
                        <div class="form-group col-lg-3">
                            <h4>Abono:</h4>
                            <input type="text" class="form-control" name="Abono" required="" placeholder="Abono">
                        </div>
                        <div class="form-group col-lg-3">
                            <h4>Saldo:</h4>
                            <input type="text" class="form-control" name="Saldo" required="" placeholder="Saldo">
                        </div>
                    </div><br>
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <input type="submit" name="Registrar" value="Registrar" class="btn btn-success float-right">
                            <a class="float-left" href="Index.php">Regresar</a>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</center>
<?php include 'footer.php'; ?>
