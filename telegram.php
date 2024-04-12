

<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$token = "";
$chat_id = "";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$response = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");
$response = json_decode($response, true);

if ($response && $response['ok']) {
    // header('Location: thank-you.html');
} else {
    echo "Error";
}
?>