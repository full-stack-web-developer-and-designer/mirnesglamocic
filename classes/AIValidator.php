<?php
/**
 * AIValidator.php
 *
 * Validates incoming AI chat requests.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class AIValidator
{

    public const MAX_MESSAGE_LENGTH = 2000;

    public const MIN_MESSAGE_LENGTH = 1;




    /**
     * Validate user message.
     *
     * @throws AIException
     */
    public function validateMessage(
        string $message
    ): string {


        $message = $this->sanitize($message);



        if ($message === '') {

            throw new AIException(
                'Please enter a message.'
            );
        }



        $length = mb_strlen($message);



        if ($length < self::MIN_MESSAGE_LENGTH) {

            throw new AIException(
                'Message is too short.'
            );
        }



        if ($length > self::MAX_MESSAGE_LENGTH) {

            throw new AIException(
                'Message is too long.'
            );
        }



        $this->detectSpam($message);



        return $message;
    }





    /**
     * Validate conversation ID.
     */
    public function validateConversationId(
        mixed $conversationId
    ): ?int {


        if (
            $conversationId === null ||
            $conversationId === ''
        ) {

            return null;
        }



        if (
            !ctype_digit(
                (string)$conversationId
            )
        ) {

            throw new AIException(
                'Invalid conversation ID.'
            );
        }



        $id = (int)$conversationId;



        if ($id <= 0) {

            throw new AIException(
                'Invalid conversation ID.'
            );
        }



        return $id;
    }





    /**
     * Validate visitor name.
     */
    public function validateName(
        ?string $name
    ): ?string {


        if ($name === null) {

            return null;
        }



        $name = trim($name);



        if ($name === '') {

            return null;
        }



        return mb_substr(
            $name,
            0,
            100
        );
    }





    /**
     * Validate email.
     */
    public function validateEmail(
        ?string $email
    ): ?string {


        if ($email === null) {

            return null;
        }



        $email = trim($email);



        if ($email === '') {

            return null;
        }



        if (mb_strlen($email) > 255) {

            throw new AIException(
                'Email address is too long.'
            );
        }



        if (
            !filter_var(
                $email,
                FILTER_VALIDATE_EMAIL
            )
        ) {

            throw new AIException(
                'Invalid email address.'
            );
        }



        return $email;
    }





    /**
     * Validate IP.
     */
    public function validateIp(
        ?string $ip
    ): ?string {


        if (
            $ip === null ||
            $ip === ''
        ) {

            return null;
        }



        return filter_var(
            $ip,
            FILTER_VALIDATE_IP
        )
            ? $ip
            : null;
    }





    /**
     * Validate browser user agent.
     */
    public function validateUserAgent(
        ?string $userAgent
    ): ?string {


        if ($userAgent === null) {

            return null;
        }



        return mb_substr(
            trim($userAgent),
            0,
            512
        );
    }





    /**
     * Sanitize text.
     */
    public function sanitize(
        string $text
    ): string {


        $text = preg_replace(
            '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u',
            '',
            $text
        );



        $text = preg_replace(
            '/\s+/u',
            ' ',
            (string)$text
        );



        return trim(
            (string)$text
        );
    }





    /**
     * Spam detection.
     *
     * @throws AIException
     */
    private function detectSpam(
        string $message
    ): void {



        /**
         * Repeated characters.
         */
        if (
            preg_match(
                '/(.)\1{10,}/u',
                $message
            )
        ) {

            throw new AIException(
                'Message looks like spam.'
            );
        }





        /**
         * Too many links.
         */
        if (
            substr_count(
                strtolower($message),
                'http'
            ) > 3
        ) {

            throw new AIException(
                'Too many links detected.'
            );
        }
    }





    /**
     * Validate full request.
     *
     * @param array<string,mixed> $data
     */
    public function validate(
        array $data
    ): array {


        return [

            'message' =>
                $this->validateMessage(
                    (string)(
                        $data['message']
                        ?? ''
                    )
                ),



            'conversation_id' =>
                $this->validateConversationId(
                    $data['conversation_id']
                    ?? null
                ),



            'name' =>
                $this->validateName(
                    $data['name']
                    ?? null
                ),



            'email' =>
                $this->validateEmail(
                    $data['email']
                    ?? null
                ),



            'ip' =>
                $this->validateIp(
                    $data['ip']
                    ??
                    ($_SERVER['REMOTE_ADDR'] ?? null)
                ),



            'user_agent' =>
                $this->validateUserAgent(
                    $data['user_agent']
                    ??
                    ($_SERVER['HTTP_USER_AGENT'] ?? null)
                )

        ];
    }

}