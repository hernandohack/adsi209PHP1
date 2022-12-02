
<h1>Inicio de session</h1>

<form action="loginController.php" method="post">
    <input type="hidden" name="login">
    <label for="">Correo</label>
    <input type="email" name="correo" required>
    <label for="">Password</label>
    <input type="password" name="pass" required>
    <button type="submit">Enviar</button>

</form>

<?php
session_start();
if(isset($_SESSION['error'])){
?>

<h1><?php  echo($_SESSION['error']) ;

?></h1>

<?php
}

if(isset($_SESSION['permisos'])){
    echo($_SESSION['permisos']);
}

?>