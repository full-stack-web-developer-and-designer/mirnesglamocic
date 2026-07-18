<?php

class AIAssistant
{
    private string $apiKey;

    public function __construct()
    {
        $this->apiKey = getenv('OPENAI_API_KEY');
    }

    public function chat(string $message): string
    {
        $systemPrompt = <<<PROMPT
You are the AI assistant for Mirnes Glamocic.

You help visitors understand:

- Web development services
- Pricing
- Portfolio projects
- Resume and experience
- Certifications

Your goals:

1. Answer questions.
2. Gather project requirements.
3. Estimate budget ranges.
4. Estimate timelines.
5. Encourage visitors to contact Mirnes when appropriate.

Be professional and concise.
PROMPT;

        $payload = [
            'model' => 'gpt-5-mini',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => $systemPrompt
                ],
                [
                    'role' => 'user',
                    'content' => $message
                ]
            ]
        ];

        $ch = curl_init('https://api.openai.com/v1/chat/completions');

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $this->apiKey,
                'Content-Type: application/json'
            ],
            CURLOPT_POSTFIELDS => json_encode($payload)
        ]);

        $response = curl_exec($ch);

        if (!$response) {
            return 'Sorry, the assistant is temporarily unavailable.';
        }

        $data = json_decode($response, true);

        return $data['choices'][0]['message']['content']
            ?? 'Sorry, I could not generate a response.';
    }
}