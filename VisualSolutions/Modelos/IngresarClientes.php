<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="../Vistas/js/sweetalert.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <?php
        include './Conexion.php';
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['documento'];
        $direccion = $_POST['direccion'];
        $estado = $_POST['estado'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];


        try {

            $sql = "INSERT INTO clientes(nombre,apellido,documento,direccion,estado_cliente,telefono,fecha)
             VALUES(:nom, :ape, :doc, :dir, :est, :tel, :fec)";
            $resultado = $conexion_db->prepare($sql);
            $resultado->execute(array(":nom" => $nombre, ":ape" => $apellido, ":doc" => $documento, ":dir" => $direccion,
                ":est" => $estado, ":tel" => $telefono, ":fec" => $fecha));

            $num_registros = $resultado->rowCount();

            if ($num_registros > 0) {
                echo '<script>swal("bien echo!", "registro guardado!", "success"); </script>',
                        header("Location:/VisualSolutions/Vistas/Index.php");
                 
                
            } else {
                echo '<script>swal("Lo siento!", "No se guardo el registro!", "warning");';
            }
           
        } catch (Exception $e) {
            echo "linea del error: " . $e->getLine() . "<br>";
            die("error!! " . $e->getMessage());
        }
        ?>
    </body>
</html>



