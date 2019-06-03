<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/menucss.css">
    <link rel="icon" href="imagenes/Ojo.png">
    <title>Visual Solutions</title>
</head>
<body style="background-color: #31B404">
    <br>
    <br>
    <br>
    <center>
        <div class="row">
            <div class="container">
                <div class="col-4" style="background-color: white; border-radius: 15px">
                    <form action="Index.php" method="post">
                        <br>
                        <h1>Ingresar</h1>
                        <img src="imagenes/Ojo.png" height="100px" width="150px">
                        <h4>Correo Electrónico:</h4>
                        <input type="email" name="Correo_Electronico" class="form-control" required="">
                        <br>
                        <h4>Clave:</h4>
                        <input type="password" name="Clave" class="form-control"><br>
                        <input type="submit" name="Ingresar" value="Ingresar" class="btn btn-success">
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
