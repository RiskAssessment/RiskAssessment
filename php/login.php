<meta charset="utf-8">
    <?php

    include_once('conexão.php');
   <?php //utilização de namespaces namespace controle;
       include 'processaAcesso.php';
use processaAcesso as processaAcesso;
$controle = new \processaAcesso\ProcessaAcesso;
if ($_POST['enviar']) { $login = $_POST['login'];
                       $senha = md5($_POST['senha']);
                       $usuario = $controle->verificaAcesso($login, $senha);
                       //redirecionando para pagina conforme o tipo do usuário 
                       if ($usuario[0]['id_tipo_acesso'] == 1)
                       {
                           header("Location:paginas/pagina1.html");
                       } else if
                           ($usuario[0]['id_tipo_acesso'] == 2) {
                           header("Location:paginas/pagina2.html"); 
                       }
                    
?>
                                                                 