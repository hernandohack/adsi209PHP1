<?php
$id = $_GET['id'];

include("conexion.php");
$con=conectar();

$sql="SELECT * FROM alumno where  id=$id";
$query=mysqli_query($con,$sql);

$alumno= mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            <div class="col-md-3"> 
                <h1>Ingrese datos</h1>
                <form action="AlumnoController.php" method="post"> 
                    <input type="hidden" name="editar" value="<?php  echo($alumno['id']);  ?>">
                    <!-- <input type="text" class="form-control mb-3" name="codigo" placeholder="codigo"> -->
                    <input type="text" class="form-control mb-3" name="doc" placeholder="doc" value="<?php  echo($alumno['documento']);  ?>">
                    <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres" value="<?php echo($alumno['nombres'])   ?>">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos" value="<?php echo($alumno['apellidos']) ?>">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
    
</body>
</html>