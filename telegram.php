<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$company = $_POST['company'];
$task = $_POST['task'];
$token = "6778989090:AAHSuDdef3mBfQ3Oz2I3LSk2pPpXepZ-wmw";
$chat_id = "-1001990264511";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Email:' => $email,
  'Сфера:' => $company,
  'Требуется:' => $task
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Happpy');
} else {
  echo "Error";
}
?>