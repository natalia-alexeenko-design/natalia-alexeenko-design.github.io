$input-text= $_POST['input-text'];
$input-email= $_POST['input-email'];
$emailTo = 'worms32@yandex.ru.ru'; //Сюда введите Ваш email
$body = "$input-text \n\n$input-email ;
$headers = "Content-Type: text/plain; charset=utf-8\r\n".'From: MySite <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;
mail($emailTo, $input-text, $body, $headers);
$emailSent = true;