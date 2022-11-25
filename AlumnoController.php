<?php
include("conexion.php");
$con=conectar();

if(isset($_POST['guardar'])){
    // $codigo=$_POST['codigo'];
    $doc=$_POST['doc'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];

    $sql="INSERT INTO alumno(documento, nombres, apellidos) 
    VALUES('$doc','$nombres','$apellidos')";
    $query=mysqli_query($con,$sql);

    if($query){
        header("location: alumno.php");

    }else{

}
}

if(isset($_POST["eliminar"])){
    $id = $_POST["eliminar"];
    $sql = "DELETE FROM alumno WHERE id = '$id' ";
    $query=mysqli_query($con,$sql);
    if($query){
        header("location: alumno.php");
    }else{
        echo("ocurrio un error");
    }
}

if(isset($_POST["editar"])){

    $id = $_POST["editar"];
    $doc = $_POST["doc"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];

    $sql="update alumno set documento='$doc', nombres='$nombres',
    apellidos='$apellidos' where id=$id";
    $query=mysqli_query($con,$sql);
    
    if($query){
        header("location: alumno.php");
    }else{
        echo("ocurrio un error");
    }


}


?>