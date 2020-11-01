<?php

$name = htmlspecialchars($_POST["name"]);
$message = htmlspecialchars($_POST["message"]);
$email = htmlspecialchars($_POST["email"]);
$message_to_send = htmlspecialchars("Сообщение от " . $name . " (email = " . $email . ")" . " Текст сообщения: " . "\r\n" . $message);

$to = "h.a.t.e46@yandex.ru";
$subject = htmlspecialchars("Black Bears");
$txt = wordwrap($message_to_send, 70, "\r\n");
// $txt = "test";

$headers = 'From: YourLogoName info@localhost' . "\r\n" ;
    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

echo($txt);
$sent = mail($to,$subject,$txt, $headers);

if ($sent){
    echo("Message has sent");
}

sleep(2);
echo "<script>window.close();</script>";
?>