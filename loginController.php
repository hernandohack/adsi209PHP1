<?php


include("conexion.php");
$con=conectar();


if(isset($_POST['login'])){

$correo = $_POST['correo'];
$password = $_POST['pass'];

$sql = "select * from alumno where correo= '$correo'
 and password = '$password'";

$query=mysqli_query($con,$sql);

$alumno = mysqli_fetch_array($query);
session_start();
if($alumno){
    $_SESSION['cliente'] = $alumno['nombres'];
    header("location: alumno.php");
}else{
    $_SESSION['error'] = 'datos incorrectos';
    header("location: login.php");
}
}

?>