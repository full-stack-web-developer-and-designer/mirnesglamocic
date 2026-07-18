<?php

header('Content-Type: application/json');

require_once '../classes/AIAssistant.php';

$input = json_decode(
    file_get_contents('php://input'),
    true
);

$message = trim($input['message'] ?? '');

if (!$message) {
    echo json_encode([
        'reply' => 'Please enter a message.'
    ]);
    exit;
}

$assistant = new AIAssistant();

echo json_encode([
    'reply' => $assistant->chat($message)
]);