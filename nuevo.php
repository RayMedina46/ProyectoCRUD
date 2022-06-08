<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link rel="shortcur icon" href="icono/descarga.png">
</head>
<body bgcolor="#62a6a1">
    <h1>Agregar nuevo usuario</h1>
    <p>El "ID" debe ser unico para cada registro.</p>
    <hr>
    <center>
    <div>
        <form action="sp_insertar.php" method="POST">
        

            <table border="1">
                <tr>
                    <td>Ingredar datos</td>
                </tr>
                <tr>
                    <td>Id:</td>
                    <td><input type="int" name="id"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido"></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="text" name="correo"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
                
            </table>

        </form>
    </div>
    </center>
</body>
</html>