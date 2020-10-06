<?php

/* https://api.telegram.org/bot1155538171:AAHb8-gmpJZifNqlzbAF4O3GDIZ_AEc5Src/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$text = "Заявка с посадочной страницы";
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$comment = $_POST['user_comment'];
$token = "1155538171:AAHb8-gmpJZifNqlzbAF4O3GDIZ_AEc5Src";
$chat_id = "-426740083";
$arr = array(
  'Откуда: ' => $text,
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Коментарии' => $comment
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>