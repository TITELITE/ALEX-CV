<?php

/* https://api.telegram.org/bot5428210587:AAHPtWmbxD2WAlMe56zXCryAaHljiSJ6agQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$text = $_POST['user_text'];

$token = "5428210587:AAHPtWmbxD2WAlMe56zXCryAaHljiSJ6agQ";
$chat_id ="-613203752";

$arr = array(
    'Name: ' => $name,
    'Email: ' => $email,
    'Text ' => $text
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('Location: thank_you.html');
} else {
    echo "Error";
}

?>