<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM alumno";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet"> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">"
    <title>Alumno</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row"> 
            <div class="col-md-3"> 
                <h1>Ingrese datos</h1>
                <form action="AlumnoController.php" method="post"> 
                    <input type="hidden" name="guardar">
                    <!-- <input type="text" class="form-control mb-3" name="codigo" placeholder="codigo"> -->
                    <input type="text" class="form-control mb-3" name="doc" placeholder="doc">
                    <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <h1>MOSTRAR TABLA</h1>
                <table class="table">
                    <thead class="table-success table-striped"> 
                        <tr> 
                            <th>Código</th>
                            <th>Doc</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            while ($row= mysqli_fetch_array($query)){
                            ?>
                        <tr>
                            <th><?php echo $row['id']    ?></th>
                            <th><?php echo $row['documento']?></th>
                            <th><?php echo $row['nombres']?></th>
                            <th><?php echo $row['apellidos']?></th>
                            <th><a href="editarAlumno.php?id=<?php echo($row['id'])?>">Editar</a></th>
                            <th>
                                <form action="AlumnoController.php" method="POST">
                                    <input type="hidden" name="eliminar" value="<?php echo($row['id']);    ?>">
                                    <button type="submit">Eliminar </button>
                                </form>

                            </th>
                           
                            <!-- <th><a href="actualizar.php?id=<?php echo $row['codigo']?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['codigo']?>" class="btn btn-danger">Eliminar</a></th> -->
                        </tr>
                            <?php
                             }
                             ?>
                        </tbody>
                </table>
         </div>
    </div> 
    </div>
</body>
</html>