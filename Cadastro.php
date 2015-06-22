<?php
include_once 'conexao.php';
$id=0;
$nome = $_POST ['nome'];
$cpf = $_POST['cpf'] ;
$empresa = $_POST['empresa'];






if(!($nome)||!($cpf)||!($rua)){
     echo "<script>location.href='questionario.html'</script>";
    echo "<script>alert('Preencha os campos!')</script>"; 
   
}
//$queryid="select max('id') from cliente";
//$resultid=mysql_query($queryid);

$query ="insert into cliente values ('$id','$nome','$cpf','$empresa')";
$insert = mysql_query($query);

if($insert){
    
    echo "<script>alert('Cliente Cadastrado com Sucesso')</script>"; 
    	
}else{
    echo "<script>location.href='questionario.html'</script>";
    echo "<script>alert('Erro Ao Cadastrar')</script>";
    
    
}