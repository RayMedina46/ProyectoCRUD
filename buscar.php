<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="shortcur icon" href="icono/icono.jpeg">
</head>
<body bgcolor="#bd8fd9"> 
    <h1>Resultados de Busqueda</h1>
    <p>Los usuarios que coinciden con la busqueda son: </p>
    <hr>
    <center>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>

        </form>
    </div>
    </center>

    <center>
    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Correo</td> 
                <td>Opciones</td>
            </tr>
            <?php
            $buscar = $_POST['buscar'];
            $cnx = mysqli_connect("localhost","root","","doscapas");
            $sql = "SELECT * FROM registro WHERE nombre LIKE '$buscar' '%' order by id desc";
            $resultado = mysqli_query($cnx,$sql);
            while($mostrar = mysqli_fetch_row($resultado)){
            ?>
            <tr>
                <td><?php echo $mostrar['0']?></td>
                <td><?php echo $mostrar['1']?></td>
                <td><?php echo $mostrar['2']?></td>
                <td><?php echo $mostrar['3']?></td>
                <td><a href="editar.php?
                id=<?php echo $mostrar['0']?> &
                nombre=<?php echo $mostrar['1']?> &
                apellido=<?php echo $mostrar['2']?> &
                correo=<?php echo $mostrar['3']?>
                ">Editar</a>
                <a href="sp_eliminar.php? id=<?php echo $mostrar['0']?>">Eliminar</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    </center>

</body>
</html>
