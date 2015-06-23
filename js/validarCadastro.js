function enviardados(){
 
if(document.cadastro.nome.value=="" || document.cadasro.nome.value.length < 8)
{
alert( "Preencha campo NOME corretamente!" );
document.cadastro.nome.focus();
return false;
}
 
 
if( document.cadastro.cpf.value=="" || document.cadastro.cpf.value.length<8)
{
alert( "Preencha campo CPF corretamente!" );
document.cadastro.cpf.focus();
return false;
}

 
if( document.cadastro.empresa.value=="" || document.cadastro.empresa.value.length<8)
{
alert( "Preencha campo Empresa corretamente!" );
document.cadastro.empresa.focus();
return false;
}

 
return true;
}
 




