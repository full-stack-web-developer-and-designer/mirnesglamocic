<?php
/**
 * AIException.php
 *
 * Custom exception class for Mirnes AI.
 *
 * Handles AI related errors:
 * - OpenAI API errors
 * - Validation errors
 * - Database errors
 * - Internal AI service errors
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class AIException extends \Exception implements JsonSerializable
{


    /**
     * Additional error context.
     */
    private array $context;




    /**
     * Constructor.
     */
    public function __construct(

        string $message = '',

        int $code = 0,

        ?Throwable $previous = null,

        array $context = []

    ) {


        $this->context = $context;


        parent::__construct(

            $message,

            $code,

            $previous

        );

    }





    /**
     * Get additional error context.
     */
    public function getContext(): array
    {
        return $this->context;
    }





    /**
     * Convert exception to array.
     */
    public function toArray(): array
    {

        return [

            'message' =>
                $this->getMessage(),


            'code' =>
                $this->getCode(),


            'file' =>
                $this->getFile(),


            'line' =>
                $this->getLine(),


            'context' =>
                $this->context

        ];

    }





    /**
     * JSON serialization.
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

}