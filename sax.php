<?php
header('Content-Type: application/json');

$token = "6163969515:AAFNFbQFNVNxNZRQAepiSs_luajL7CUM_Vg";
$chat_id = "5157616506";

echo json_encode([
    "token" => $token,
    "chat_id" => $chat_id
]);
?>
