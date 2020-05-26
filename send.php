<?php
$input-email = $_POST['input-email'];
$input-text = $_POST['input-text'];
$input-email = htmlspecialchars($input-email);
$input-text = htmlspecialchars($input-text);
$input-email = urldecode($input-email);
$input-text = urldecode($input-text);
$input-email = trim($input-email);
$input-text = trim($input-text);
//echo $input-email;
//echo "<br>";
//echo $input-text;
if (mail("worms32@yandex.ru", "Заявка с сайта", "ФИО:".$input-email.". E-mail: ".$input-text ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>