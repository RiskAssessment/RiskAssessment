<?php
include 'conexao.php';

$id = $_POST['clienteId'];
$risco= $_POST['riscoCliente'];
$retorno;



$query ="update cliente set risco='$risco' where Id='$id'";
$insert = mysql_query($query);

if($insert){
    
    $retorno=array(


    
   "mensagem"=>"Questionário Respondido",

	);
   
}else{
    
     $retorno=array(


    
   "mensagem"=>"Erro ao Cadastrar",
	);
     
}
echo json_encode($retorno);

