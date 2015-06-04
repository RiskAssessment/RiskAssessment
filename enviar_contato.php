<?php
    $name     =   $_POST['name']; 
    $email    =   $_POST['email']; 
    $subject  =   $_POST['subject']; 
    $message  =   $_POST['message']; 
 
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";


         
       $corpo = "Formulário enviado\n";
       $corpo .= "Nome: " . $name . "\n";
       $corpo .= "Email: " . $email . "\n";
       $corpo .= "Comentários: " . $message . "\n";
     
       $email_to = 'dairelsi@live.com'; 
      
    $status = mail($email_to, $subject, $corpo, $headers); 

	if($status) {
		echo "<script> alert('Formulário enviado com sucesso!'); </script>"; 
	}
	else {
		echo "<script alert('Falha ao enviar o FOrmulário.'); </script>"; 
	}
	
?>