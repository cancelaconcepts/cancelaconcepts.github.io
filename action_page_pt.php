<?php 
if(isset($_POST['submit'])){
    $to = "fcancela@student.dei.uc.pt"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Cancela Concepts - Mensagem";
    $subject2 = "Cancela Concepts - Cópia da Mensagem";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Aqui está a sua cópia da mensagem " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Email enviado. Obrigado pela mensagem " . $name . ", entrarei em contacto consigo o mais cedo possível. Voltará automaticamente à página anterior em 5 segundos...";
    }
echo "<meta http-equiv=\"refresh\" content=\"5;url=".$_SERVER['HTTP_REFERER']."\"/>";
?>