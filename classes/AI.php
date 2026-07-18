<?php
/**
 * AI.php
 *
 * Main service class for Mirnes AI.
 *
 * Coordinates:
 * - Validation
 * - Conversations
 * - Messages
 * - Prompt building
 * - OpenAI communication
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class AI
{

    /**
     * Validator instance.
     */
    private AIValidator $validator;


    /**
     * Prompt builder.
     */
    private AIPrompt $prompt;


    /**
     * OpenAI client.
     */
    private AIClient $client;



    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->validator = new AIValidator();

        $this->prompt = new AIPrompt();

        $this->client = new AIClient();
    }



    /**
     * Ask Mirnes AI.
     *
     * @throws AIException
     */
    public function ask(
        string $message,
        ?int $conversationId = null,
        array $visitor = []
    ): AIResponse {


        try {


            if (
                session_status() === PHP_SESSION_NONE
                &&
                !headers_sent()
            ) {
                session_start();
            }



            $data = $this->validator->validate([

                'message' => $message,

                'conversation_id' => $conversationId,

                'name' =>
                    $visitor['name'] ?? null,

                'email' =>
                    $visitor['email'] ?? null,

                'ip' =>
                    $_SERVER['REMOTE_ADDR'] ?? null

            ]);



            /*
             * Create or load conversation
             */
            $conversation =
                $this->getConversation($data);



            /*
             * Store visitor message
             */
            AIMessage::create([

                'conversation_id' =>
                    $conversation->id,

                'role' =>
                    'visitor',

                'message' =>
                    $data['message']
            ]);



            /*
             * Load history
             */
            $history =
                AIMessage::getHistory(
                    $conversation->id
                );



            /*
             * Build OpenAI payload
             */
            $payload =
                $this->prompt->build(
                    $data['message'],
                    $history
                );



            /*
             * Send request
             */
            $response =
                $this->client->send(
                    $payload
                );



            /*
             * Attach conversation ID
             */
            $response->setConversationId(
                $conversation->id
            );



            /*
             * Save AI response
             */
            AIMessage::create([

                'conversation_id' =>
                    $conversation->id,

                'role' =>
                    'assistant',

                'message' =>
                    $response->getMessage(),

                'model' =>
                    $response->getModel(),

                'tokens' =>
                    $response->getTotalTokens()

            ]);



            return $response;



        } catch (Throwable $e) {


            throw new AIException(
                $e->getMessage(),
                0,
                $e
            );

        }
    }




    /**
     * Get existing conversation
     * or create new one.
     */
    private function getConversation(
        array $data
    ): object {


        if (
            !empty($data['conversation_id'])
        ) {


            $conversation =
                AIConversation::get(
                    $data['conversation_id']
                );


            if ($conversation !== null) {

                return $conversation;
            }
        }



        return AIConversation::create([

            'ip_address' =>
                $data['ip'],

            'name' =>
                $data['name'],

            'email' =>
                $data['email'],

            'session_id' =>
                session_id()

        ]);
    }




    /**
     * Get conversation history.
     */
    public function history(
        int $conversationId
    ): array {

        return AIMessage::getHistory(
            $conversationId
        );
    }




    /**
     * Create lead.
     */
    public function createLead(
        array $data
    ): ?object {

        return AILead::create($data);
    }




    /**
     * Check AI availability.
     */
    public function available(): bool
    {

        try {

            return $this->client->test();


        } catch(Throwable $e) {

            return false;
        }
    }
}