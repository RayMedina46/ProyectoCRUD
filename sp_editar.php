<?php
$id = $_POST['id'];
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$cor = $_POST['correo'];

$cnx = mysqli_connect("localhost","root","","doscapas");
$sql = "UPDATE registro SET nombre='$nom', apellido='$ape', correo='$cor' WHERE id LIKE $id";
$resultado = mysqli_query($cnx,$sql);
if (!$resultado){
    echo "No se actualizo";
}
else{
    header("Location: index.php");
}
?>