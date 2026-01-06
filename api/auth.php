<?php
$API_KEY_VALIDA = "HOTEL_API_123";

function verificarApiKey()
{
    global $API_KEY_VALIDA;


    $headers = array_change_key_case(getallheaders(), CASE_LOWER);
    $authHeader = $headers['authorization'] ?? null;

    if (!$authHeader) {
        http_response_code(401);
        header('Content-Type: application/json');
        echo json_encode(["error" => "API Key no enviada"]);
        exit;
    }

    $apiKey = str_replace("bearer ", "", strtolower($authHeader));

    if ($apiKey !== strtolower($API_KEY_VALIDA)) {
        http_response_code(403);
        header('Content-Type: application/json');
        echo json_encode(["error" => "API Key inválida"]);
        exit;
    }
}
