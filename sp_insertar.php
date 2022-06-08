<?php
$id = $_POST['id'];
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$cor = $_POST['correo'];


$cnx = mysqli_connect("localhost","root","","doscapas");
$sql = "INSERT INTO registro(id, nombre, apellido, correo) VALUES('$id','$nom','$ape','$cor')";
$resultado = mysqli_query($cnx,$sql);
if (!$resultado){
    echo "No se inserto";
}
else{
    header("Location: index.php");
}
?>