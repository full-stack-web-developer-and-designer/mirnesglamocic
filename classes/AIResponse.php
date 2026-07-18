<?php
/**
 * AIResponse.php
 *
 * Represents a response returned from OpenAI.
 *
 * Stores:
 * - AI message
 * - Model information
 * - Token usage
 * - Conversation ID
 * - Raw API response
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class AIResponse implements JsonSerializable
{

    /**
     * Generated AI message.
     */
    private string $message;



    /**
     * OpenAI model name.
     */
    private string $model;



    /**
     * Input tokens.
     */
    private int $inputTokens;



    /**
     * Output tokens.
     */
    private int $outputTokens;



    /**
     * Total tokens.
     */
    private int $totalTokens;



    /**
     * Response status.
     */
    private string $status;



    /**
     * Conversation ID.
     */
    private ?int $conversationId;



    /**
     * Complete raw response.
     */
    private array $raw;





    /**
     * Constructor.
     */
    public function __construct(

        string $message,

        string $model = '',

        int $inputTokens = 0,

        int $outputTokens = 0,

        int $totalTokens = 0,

        string $status = '',

        array $raw = [],

        ?int $conversationId = null

    ) {


        $this->message = $message;

        $this->model = $model;

        $this->inputTokens = $inputTokens;

        $this->outputTokens = $outputTokens;

        $this->totalTokens = $totalTokens;

        $this->status = $status;

        $this->raw = $raw;

        $this->conversationId = $conversationId;

    }





    /**
     * Get AI message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }





    /**
     * Get model name.
     */
    public function getModel(): string
    {
        return $this->model;
    }





    /**
     * Get input tokens.
     */
    public function getInputTokens(): int
    {
        return $this->inputTokens;
    }





    /**
     * Get output tokens.
     */
    public function getOutputTokens(): int
    {
        return $this->outputTokens;
    }





    /**
     * Get total tokens.
     */
    public function getTotalTokens(): int
    {
        return $this->totalTokens;
    }





    /**
     * Get response status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }





    /**
     * Get conversation ID.
     */
    public function getConversationId(): ?int
    {
        return $this->conversationId;
    }





    /**
     * Set conversation ID.
     */
    /**
 * Set conversation ID.
 */
public function setConversationId(
    int $id
): void {

    if ($id <= 0) {

        throw new InvalidArgumentException(
            'Invalid conversation ID.'
        );
    }


    $this->conversationId = $id;
}





    /**
     * Get raw OpenAI response.
     */
    public function getRaw(): array
    {
        return $this->raw;
    }





    /**
     * Check if response contains text.
     */
    public function hasMessage(): bool
    {
        return trim($this->message) !== '';
    }





    /**
     * Convert response to array.
     */
    public function toArray(): array
    {

        return [

            'message' =>
                $this->message,


            'model' =>
                $this->model,


            'input_tokens' =>
                $this->inputTokens,


            'output_tokens' =>
                $this->outputTokens,


            'total_tokens' =>
                $this->totalTokens,


            'status' =>
                $this->status,


            'conversation_id' =>
                $this->conversationId,


            'raw' =>

                (
                    defined('ENV')
                    &&
                    ENV === 'development'
                )

                ? $this->raw

                : []

        ];

    }





    /**
     * JSON serialization.
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
    /**
     * Check if OpenAI response completed successfully.
     */
    public function isSuccessful(): bool
    {
        return $this->status === 'completed';
    }
}