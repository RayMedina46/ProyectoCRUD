<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="shortcur icon" href="icono/icono.jpeg">
</head>
<body bgcolor="#45aaf2">
    <h1>Editar un registro</h1>
    <hr>
<?php
$id = $_GET['id'];
$nom = $_GET['nombre'];
$ape = $_GET['apellido'];
$cor = $_GET['correo'];
?>
    <center>
    <div>
        <form action="sp_editar.php" method="POST">
            <table border="1">
                <tr>
                    <td>Ingredar datos</td>
                </tr>
                <tr>
                    <td>Id:</td>
                    <td><input type="int" name="id" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" value="<?=$nom?>"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido" value="<?=$ape?>"></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="text" name="correo" value="<?=$cor?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>

        </form>
    </div>
    </center>
</body>
</html>