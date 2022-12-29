<?php
if(isset($_POST['send'])){
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subjet']) && !empty($_POST['message']) ){

$destiny = "jptroccay@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$subjet = $_POST['subjet'];
$message = $_POST['message'];

};
};
$contenido = "Nombre: " .$name. "\nemail" .$email. "subjet" .$subjet. "message" .$message;
mail($destiny,$subjet,$contenido);

header("Location: ../en/index.html");
if ($contenido) {
    echo "<h4>Email sent successfully</h4>";
};
?>
