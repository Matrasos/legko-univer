<?php

// Test chat
$token = "7116492047:AAEO8he87yCqGiind7sY8diutOsgn_N0O8k";
$chat_id = "-4153812821";

// Обработка данных и отправка в Telegram

$inputJSON = file_get_contents('php://input');
$data = json_decode($inputJSON, true);
$txt = ''; // Инициализируем пустую строку
foreach ($data as $key => $value) {
  $txt .= urlencode("<b>" . $key . "</b>" . ': ' . $value . "\n");
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=HTML&text={$txt}", "r");

// После успешной отправки в Telegram
if ($sendToTelegram) {
  echo 'success';
} else {
  echo 'error';
}
