<?php
require 'PHPMailerAutoload.php';
      
      $nome = utf8_encode($_POST["nome"]);
      $fone = utf8_encode($_POST["fone"]);
      $email = utf8_encode($_POST["email"]);
      $message = utf8_encode($_POST["mensagem"]);

      require_once('class.phpmailer.php');
      $para = "jr.mct@hotmail.com";

      $mail = new PHPMailer(); 
//    defaults to using php "mail()"

      $mail->IsSMTP();
//    telling the class to use SMTP
      $mail->Host          = "smtp.gmail.com";
      $mail->SMTPAuth      = true;                                    // enable SMTP authentication
//    $mail->SMTPKeepAlive = true;                                    // SMTP connection will not close after each email sent
//    $mail->SMTPSecure = 'tls'; 
      $mail->Port          = 465;                                     // set the SMTP port for the GMAIL server
      $mail->SMTPSecure    = "ssl";
      $mail->Username      = "doacomm.mail@gmail.com";  // SMTP account username
      $mail->Password      = "webweb01";                             // SMTP account password
      
      $mail->CharSet = 'UTF-8';
      $mail->Encoding = "base64";
        
      $mail->AddReplyTo("$email",utf8_decode("$nome"));
//    $mail->SetFrom("$para", utf8_decode("$para_name"));
      $mail->SetFrom("$email", utf8_decode("$nome"));
      $mail->AddReplyTo("$email",utf8_decode("$nome"));
      $mensagem = "";
//    4 – Agora definimos a  mensagem que vai ser enviado no e-mail
      $mensagem .= "<b style='FONT-SIZE:12PX;'>Nome:  </b>".$nome."<br />";
      $mensagem .= "<b style='FONT-SIZE:12PX;'>E-mail:  </b>".$email."<br />";
      $mensagem .= "<b style='FONT-SIZE:12PX;'>Telefone:  </b>".$fone."<br />";
      $mensagem .= "<b style='FONT-SIZE:12PX;'>Mensagem:  </b>".$message."<br />";

      $mail->AddAddress($para, utf8_decode("Nome"));
      $mail->Subject    = utf8_decode("Contato");
      $mail->MsgHTML(utf8_decode($mensagem));
     
      if(!$mail->Send()) {echo "Mailer Error: " .$mail->ErrorInfo."\n";} else { header("Location: index.php?success=true"); }
      
//    1 = Erros e mensagens
//    2 = Apenas mensagens
$mail->SMTPDebug  = 1; 

?>