<?php
/**
 * ai.php
 *
 * AJAX endpoint for Mirnes AI chat.
 *
 * Receives visitor messages,
 * validates incoming data,
 * applies server-side rate limiting,
 * communicates with the AI service,
 * and returns a JSON response.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);

// --------------------------------------------------
// Headers
// --------------------------------------------------

header(
    'Content-Type: application/json; charset=utf-8'
);

// --------------------------------------------------
// Bootstrap
// --------------------------------------------------

require_once dirname(__DIR__) . '/core/init.php';


// --------------------------------------------------
// JSON response helper
// --------------------------------------------------

function jsonResponse(
    array $data,
    int $status = 200
): never {
    http_response_code($status);

    echo json_encode(
        $data,
        JSON_UNESCAPED_UNICODE |
        JSON_UNESCAPED_SLASHES
    );

    exit;
}


// --------------------------------------------------
// Request method
// --------------------------------------------------

if (
    ($_SERVER['REQUEST_METHOD'] ?? '')
    !== 'POST'
) {
    header('Allow: POST');

    jsonResponse(
        [
            'success' => false,

            'message' =>
                'Invalid request method.'
        ],
        405
    );
}


// --------------------------------------------------
// Read JSON input
// --------------------------------------------------

$rawInput = file_get_contents(
    'php://input'
);

if ($rawInput === false) {
    jsonResponse(
        [
            'success' => false,

            'message' =>
                'Unable to read request data.'
        ],
        400
    );
}


$input = json_decode(
    $rawInput,
    true
);


if (
    !is_array($input)
    ||
    json_last_error() !== JSON_ERROR_NONE
) {
    jsonResponse(
        [
            'success' => false,

            'message' =>
                'Invalid JSON data.'
        ],
        400
    );
}


// --------------------------------------------------
// Input data
// --------------------------------------------------

$message = trim(
    (string) (
        $input['message']
        ?? ''
    )
);


$conversationId = null;

if (
    isset($input['conversation_id'])
    &&
    is_numeric($input['conversation_id'])
) {
    $parsedConversationId =
        (int) $input['conversation_id'];

    if ($parsedConversationId > 0) {
        $conversationId =
            $parsedConversationId;
    }
}


$visitor = [
    'name' => trim(
        (string) (
            $input['name']
            ?? ''
        )
    ),

    'email' => trim(
        (string) (
            $input['email']
            ?? ''
        )
    )
];


// --------------------------------------------------
// Validate message
// --------------------------------------------------

if ($message === '') {
    jsonResponse(
        [
            'success' => false,

            'message' =>
                'Message cannot be empty.'
        ],
        422
    );
}


if (
    mb_strlen(
        $message,
        'UTF-8'
    ) > 2000
) {
    jsonResponse(
        [
            'success' => false,

            'message' =>
                'Message is too long. Maximum length is 2000 characters.'
        ],
        422
    );
}


// --------------------------------------------------
// Validate visitor data
// --------------------------------------------------

if (
    mb_strlen(
        $visitor['name'],
        'UTF-8'
    ) > 100
) {
    jsonResponse(
        [
            'success' => false,

            'message' =>
                'Name is too long. Maximum length is 100 characters.'
        ],
        422
    );
}


if (
    mb_strlen(
        $visitor['email'],
        'UTF-8'
    ) > 254
) {
    jsonResponse(
        [
            'success' => false,

            'message' =>
                'Email address is too long.'
        ],
        422
    );
}


if (
    $visitor['email'] !== ''
    &&
    filter_var(
        $visitor['email'],
        FILTER_VALIDATE_EMAIL
    ) === false
) {
    jsonResponse(
        [
            'success' => false,

            'message' =>
                'Invalid email address.'
        ],
        422
    );
}


// --------------------------------------------------
// Rate limiting
//
// Maximum:
// 20 valid AI requests per IP address
// during a 60-minute window.
// --------------------------------------------------

try {
    $rateLimitMaximum = 20;

    $rateLimiter =
        new AIRateLimiter(
            $rateLimitMaximum,
            60 * 60
        );


    $rateLimit =
        $rateLimiter->consume();


    header(
        'X-RateLimit-Limit: ' .
        $rateLimitMaximum
    );

    header(
        'X-RateLimit-Remaining: ' .
        $rateLimit['remaining']
    );


    if (!$rateLimit['allowed']) {
        $retryAfter =
            max(
                1,
                (int) $rateLimit['retry_after']
            );


        header(
            'Retry-After: ' .
            $retryAfter
        );


        jsonResponse(
            [
                'success' => false,

                'message' =>
                    'You have reached the maximum of 20 AI requests per hour. Please try again later.',

                'retry_after' =>
                    $retryAfter
            ],
            429
        );
    }
} catch (Throwable $e) {
    $output = [
        'success' => false,

        'message' =>
            'The request protection service is temporarily unavailable.'
    ];


    if (
        defined('ENV')
        &&
        ENV === 'development'
    ) {
        $output['error'] =
            $e->getMessage();

        $output['file'] =
            $e->getFile();

        $output['line'] =
            $e->getLine();
    }


    jsonResponse(
        $output,
        500
    );
}


// --------------------------------------------------
// Run AI
// --------------------------------------------------

try {
    $ai = new AI();


    $response = $ai->ask(
        $message,
        $conversationId,
        $visitor
    );


    jsonResponse(
        [
            'success' => true,

            'message' =>
                $response->getMessage(),

            'conversation_id' =>
                $response->getConversationId(),

            'status' =>
                $response->getStatus()
        ]
    );

} catch (Throwable $e) {
    jsonResponse(
        [
            'success' => false,

            'message' =>
                'The request protection service is temporarily unavailable.',

            'error' =>
                $e->getMessage(),

            'file' =>
                $e->getFile(),

            'line' =>
                $e->getLine()
        ],
        500
    );
}