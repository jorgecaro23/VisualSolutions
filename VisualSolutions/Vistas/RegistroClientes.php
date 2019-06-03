<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include "header.php" ?>
        <style>
            .centrarIcono{
                margin-top:50px;

            }
        </style>
    </head>
    <body>
        
        <form class="needs-validation " action="../Modelos/IngresarClientes.php" method="post" novalidate>

            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">

                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Registrar cliente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <h4 style="text-align: center">Nombre:</h4>
                                <input type="text" id="defaultForm-email" class="form-control validate" name="nombre" required="" >
                                <div class="invalid-feedback">
                                    <h5 class="alert alert-danger">Campo requerido</h5>
                                </div>
                                <div class="valid-feedback">
                                    <h5 class="">Ok!!</h5>
                                </div>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <h4 style="text-align: center">Apellido:</h4>
                                <input type="text" id="defaultForm-pass" class="form-control validate" name="apellido" required="">
                                <div class="invalid-feedback">
                                    <h5 class="alert alert-danger">Campo requerido</h5>
                                </div>
                                <div class="valid-feedback">
                                    <h5 class="">Ok!!</h5>
                                </div>
                            </div>
                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <h4 style="text-align: center">Documento:</h4>
                                <input type="text" id="defaultForm-pass" class="form-control validate" name="documento" required="">
                                <div class="invalid-feedback">
                                    <h5 class="alert alert-danger">Campo requerido</h5>
                                </div>
                                <div class="valid-feedback">
                                    <h5 class="">Ok!!</h5>
                                </div>
                            </div>
                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <h4 style="text-align: center">Dirección:</h4>
                                <input type="text" id="defaultForm-pass" class="form-control validate" name="direccion" required="">
                                <div class="invalid-feedback">
                                    <h5 class="alert alert-danger">Campo requerido</h5>
                                </div>
                                <div class="valid-feedback">
                                    <h5 class="">Ok!!</h5>
                                </div>
                            </div>
                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <h4 style="text-align: center">Estado:</h4>
                                <select  class="custom-select" name="estado" name="estado"  required="">
                                    <option></option>
                                    <option value="activo">activo</option> 
                                    <option value="inactivo">inactivo</option>
                                </select>
                                <div class="invalid-feedback">
                                    <h5 class="alert alert-danger">Campo requerido</h5>
                                </div>
                                <div class="valid-feedback">
                                    <h5 class="">Ok!!</h5>
                                </div>

                            </div>
                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <h4 style="text-align: center">Telefono:</h4>
                                <input type="text" id="defaultForm-pass" class="form-control validate" name="telefono" required="">
                                <div class="invalid-feedback">
                                    <h5 class="alert alert-danger">Campo requerido</h5>
                                </div>
                                <div class="valid-feedback">
                                    <h5 class="">Ok!!</h5>
                                </div>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <h4 style="text-align: center">Fecha:</h4>
                                <input type="date" id="defaultForm-pass" class="form-control" name="fecha" required="">
                                <div class="invalid-feedback">
                                    <h5 class="alert alert-danger">Campo requerido</h5>
                                </div>
                                <div class="valid-feedback">
                                    <h5 class="">Bien hecho!!</h5>
                                </div>
                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class=" col-4 d-flex ">
                                <input  type="submit" class=" btn btn-success form-control"  name="Registrar"  value="Registrar">
                            </div>
                            <div class="col-4">
                                <input class="btn btn-danger float-right" type="reset" value="Borrar Campos" name="limpiar" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col text-center ">
                <a href="" class="btn btn-default btn-rounded mb-4 centrarIcono img-fluid" data-toggle="modal" data-target="#modalLoginForm" >
                    <img src="imagenes/icono_registrar.png" alt=""/>  </a>
            </div>
            <div>
                <p class="h1 text-center img-fluid">Click en el ícono para registrar un cliente</p>
            </div>


        </form>
        <script>

            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
        <?php include "footer.php"; ?>
    </body>
</html>
