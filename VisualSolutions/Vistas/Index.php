<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado Clientes</title>
        <link href="css/alertify.default.css" rel="stylesheet" type="text/css"/>
        <script src="js/alertify.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            function confirmarBorrado() {
                var respuesta = confirm("desea eliminar este resgistro?");
                if (respuesta == true) {

                    return true;
                } else {
                    return false;
                }
            }

        </script> 


    </head>
    <body>

        <?php include "header.php"; ?>
        <?php
        include '../Modelos/Conexion.php'; //llamamos a la conexion
        $busqueda = $conexion_db->query("SELECT * FROM clientes"); //con la variable de conexion traemos los registros de la bd
        $resultado = $busqueda->fetchAll(PDO::FETCH_OBJ); //almacenamos esos registros en un array de objetos  llamado $resultado

        if (isset($_POST["crear"])) {//valida si se preciono el boton 'crear' de tipo submit
            $nombre = $_POST['nom']; //si se preciono el boton guardo lo ingresado en las variables
            $apellido = $_POST['ape'];
            $documento = $_POST['doc'];
            $direccion = $_POST['dir'];
            $estado = $_POST['est'];
            $telefono = $_POST['tel'];
            $fecha = $_POST['fec'];

            //ejecuto la consulta sql y a los values les asigo marcadores
            $sql = "INSERT INTO clientes(nombre,apellido,documento,direccion,estado_cliente,telefono,fecha)
                   VALUES(:nom, :ape, :doc, :dir, :est, :tel, :fec)";
            $resultado = $base->prepare($sql); //preparo la consulta
            $resultado->execute(array(":nom" => $nombre, ":ape" => $apellido, ":doc" => $documento, ":dir" => $direccion,
                ":est" => $estado, ":tel" => $telefono, ":fec" => $fecha)); //guardo la consulta en un array y la ejecuto
        }
        ?>

        <h1 class="h1 text-center">Listado de clientes</h1>
        <div class="container ">
            <div class="row">
                <div class="col-8">
                    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                        <table class="table table-sm table-hover img-fluid table table-bordered w-25 ">
                            <thead>
                                <tr class="table-active">
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Documento</th>
                                    <th>Direccion</th>
                                    <th>Estado</th>
                                    <th>Telefono</th>
                                    <th>Fecha</th>
                                </tr> 
                            </thead>
                            <tbody>
                                <?php foreach ($resultado as $cliente): ?>
                                    <tr class="">
                                        <td> <?php echo $cliente->id_cliente ?> </td>
                                        <td> <?php echo $cliente->nombre ?> </td>
                                        <td><?php echo $cliente->apellido ?> </td>
                                        <td><?php echo $cliente->documento ?> </td>
                                        <td><?php echo $cliente->direccion ?> </td>
                                        <td><?php echo $cliente->estado_cliente ?> </td>
                                        <td><?php echo $cliente->telefono ?> </td>
                                        <td><?php echo $cliente->fecha ?> </td>

                                        <td> <a href="../Modelos/borrar.php?id=<?php echo $cliente->id_cliente; ?>"><input id="ejecuta" class="btn btn-danger"  type='button' name='' value='Borrar'onclick="return confirmarBorrado()" ></a></td>
                                       
                                        <td> <a href="../Modelos/editar.php?id=<?php echo $cliente->id_cliente; ?> & nom=<?php echo $cliente->nombre;?> & ape=<?php echo $cliente->apellido;?> & doc=<?php echo $cliente->documento;?> 
                                                & dir=<?php echo $cliente->direccion;?> & esta=<?php echo $cliente->estado_cliente;?> & tele=<?php echo $cliente->telefono;?> 
                                                & fech=<?php echo $cliente->fecha;?>"><input class="btn btn-info" type='button' name='' value='Actualizar'></a></td>

                                    </tr> 

                                    <?php
                                endforeach; //final del blucle que recorre y muestra los datos en la bd tabla clientes
                                ?>

                                <tr>

                                    <td><input type='text' name='nom' size='10' class=''></td>
                                    <td><input type='text' name='ape' size='10' class=''></td>
                                    <td><input type='text' name='doc' size='10' class=''></td>
                                    <td><input type='text' name='dir' size='10' class=''></td>
                                    <td><input type='text' name='est' size='10' class=''></td>
                                    <td><input type='text' name='tel' size='10' class=''></td>
                                    <td><input type='text' name='fec' size='10' class=''></td>
                                    <td class='bot'><input class="btn btn-success" type='submit' name='crear' id='cr' value='Insertar'></td>
                                </tr>  
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>



        <?php include "footer.php"; ?>}

    </body>
</html>
