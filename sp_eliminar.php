<?php
$id = $_GET['id'];

$cnx = mysqli_connect("localhost","root","","doscapas");
$sql = "DELETE FROM registro WHERE id LIKE $id";
$resultado = mysqli_query($cnx,$sql);
if (!$resultado){
    echo "No se elimino";
}
else{
    header("Location: index.php");
}
?>