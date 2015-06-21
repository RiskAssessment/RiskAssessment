<?php

include_once('conexão.php');

$nome=$_POST ['nome'];
$cpf= $_POST ['cpf'];
$empresa= $_POST ['empresa'];

$sql = mysql_query("INSERT INTO usuarios(nome ,cpf , empresa)
VALUES ('$nome', '$cpf', '$empresa')") ;

 header("Location:paginas/pagina1.html");
?>
