<?php
include_once 'conexao.php';
$id=0;
$nome = $_POST ['nome'];
$cpf = $_POST['cpf'] ;
$empresa = $_POST['empresa'];
$risco=0;





if(!($nome)||!($cpf)||!($empresa)){
     
    echo "<script>alert('Preencha os campos!')</script>"; 
    
}
//$queryid="select max('id') from cliente";
//$resultid=mysql_query($queryid);

$query ="insert into cliente values ('$id','$nome','$cpf','$empresa','$risco')";
$insert = mysql_query($query);
$clienteid=mysql_insert_id();

if($insert){
    
    echo "<script>alert('Cliente Cadastrado com Sucesso')</script>"; 
    header("Location:questionario.html?id=".$clienteid."");
}else{
    echo "<script>location.href='questionario.html'</script>";
    echo "<script>alert('Erro Ao Cadastrar')</script>";
    
    
}