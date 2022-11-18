<?php
include("conexion.php");
$con=conectar();

// $codigo=$_POST['codigo'];
$doc=$_POST['doc'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="INSERT INTO alumno(documento, nombres, apellidos) VALUES('$doc','$nombres','$apellidos')";
$query=mysqli_query($con,$sql);

if($query){
    header("location: alumno.php");

}else{

}
?>