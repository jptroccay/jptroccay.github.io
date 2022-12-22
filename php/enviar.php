<?php
$destino = "jptroccay@gmail.com";
$nombre = $_POST["name"];
$email = $_POST["email"];
$tema = $_POST["tema"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " .$nombre. "\nemail" .$email. "tema" .$tema. "mensaje" .$mensaje;
mail($destino,$tema,$contenido);
header("Location:index.html");
?>

