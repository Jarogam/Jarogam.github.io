<?php

/* https://api.telegram.org/bot1542795720:AAFC16WNuHkhOiDbmSw6_VVme_cwRAyxR6U/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone']; 
$token = "1542795720:AAFC16WNuHkhOiDbmSw6_VVme_cwRAyxR6U";
$chat_id = "-581749490";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
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