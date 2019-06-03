<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './Conexion.php';//conecto con la base de datos
        $id=$_GET['id'];//tomo el id enviado desde el boton borrar del index
        $conexion_db->query("DELETE FROM CLIENTES WHERE ID_CLIENTE= '$id' ");//realizo el delete
        header("Location:/VisualSolutions/Vistas/Index.php");//redirecciono al index
        
        
        ?>
    </body>
</html>
