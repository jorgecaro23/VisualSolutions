<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include '../Modelos/header.php'; ?>
        <?php
        include './Conexion.php';
        if (!isset($_POST["actualizar"])) {//si no haz pulsado el boton actualizar hacer:
            $id = $_GET['id']; //Optener los valores enviados desde el BOTON ACTUALIZAR
            $nom = $_GET['nom']; //Mostrar los valores recibidos, en controles del formulario actualizar
            $ape = $_GET['ape'];
            $docu = $_GET['doc'];
            $dire = $_GET['dir'];
            $est = $_GET['esta'];
            $tele = $_GET['tele'];
            $fech = $_GET['fech'];
        } else {
            $id=$_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $documento = $_POST['documento'];
            $direccion = $_POST['direccion'];
            $estado = $_POST['estado'];
            $telefono = $_POST['telefono'];
            $fecha = $_POST['fecha'];

            $sql = "UPDATE CLIENTES set nombre=:minombre, apellido=:miape,documento=:midocu, direccion=:midir, 
                   estado_cliente=:miest,telefono=:mitel, fecha=:mifec WHERE id_cliente=:miid";
            $resultado = $conexion_db->prepare($sql);
            $resultado->execute(array(":miid" => $id, ":minombre" => $nombre, ":miape" => $apellido,":midocu"=>$documento,":midir" => $direccion,
                ":miest"=>$estado, ":mitel"=>$estado, ":mifec"=>$fecha));
            header("Location:/VisualSolutions/Vistas/Index.php");
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h2 class="h2 text-center">Actualizar registro de clientes</h2>
            <div class="container jumbotron ">
                <div class="row">

                    <input class="form-control" type="hidden" name="id" value="<?php echo $id ?>">
                    <br>

                    <div class="col">
                        <h4>Nombre:</h4>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $nom ?>">
                        <br>
                    </div>
                    <div class="col">
                        <h4>Apellido:</h4>
                        <input class="form-control" type="text" name="apellido"value="<?php echo $ape ?>">
                        <br>
                    </div>
                    <div class="col">
                        <h4>No. de Documento:</h4>
                        <input class="form-control" type="text" name="documento" value="<?php echo $docu?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Direccion</h4>
                        <input class="form-control" type="text" name="direccion" value="<?php echo $dire?>">
                        <br>
                    </div>

                    <div class="form-group col">
                        <h4>Estado del cliente</h4>
                        <select  class="form-control" name="estado">
                            <option value="<?php echo $est ?>"></option>
                            <option value="activo">activo</option> 
                            <option value="inactivo">inactivo</option>
                        </select>
                    </div>
                    <div class="col">
                        <h4>Telefono</h4>
                        <input class="form-control" type="text" name="telefono" value="<?php echo $tele ?>">
                        <br>
                    </div>
                </div>
                <div class="row row justify-content-center">
                    <div class="col-4 ">
                        <h4>Fecha de registro</h4>
                        <input class="form-control" type="date" name="fecha" value="<?php echo $fech ?>">
                        <br>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-2">
                        <h4></h4>
                        <input  type="submit" class=" btn btn-success form-control"  name="actualizar"  value="Actualizar">
                    </div>
                </div>
            </div>
        </form>
        <?php include "../Vistas/footer.php" ?>
    </body>
</html>
