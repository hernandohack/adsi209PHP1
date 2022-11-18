<?php
function conectar() {
    $host="localhost";
    $user="root";
    $pass="";

    $bd="sena";
    
    $con=mysqli_connect($host,$user,$pass);
    
    mysqli_select_db($con,$bd);
    
    if($con){
        echo("se conectó correctamente");
    }else{
        echo("ocurrio un error");
    }

}
?>