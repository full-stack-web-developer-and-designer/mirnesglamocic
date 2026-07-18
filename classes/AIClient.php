<?php
/**
 * AIClient.php
 *
 * Handles communication with OpenAI API.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class AIClient
{

    private const API_URL =
        'https://api.openai.com/v1/responses';


    private string $apiKey;


    private int $timeout;



    public function __construct()
    {
        $this->apiKey = (string) Config::get(
            'openai/api_key'
        );


        $this->timeout = (int)(
            Config::get('openai/timeout')
            ?? 60
        );


        if ($this->apiKey === '') {

            throw new AIException(
                'OpenAI API key is missing.'
            );
        }
    }




    /**
     * Send request to OpenAI.
     *
     * @throws AIException
     */
    public function send(
        array $payload
    ): AIResponse {


        $json = json_encode(
            $payload,
            JSON_UNESCAPED_UNICODE |
            JSON_UNESCAPED_SLASHES
        );


        if ($json === false) {

            throw new AIException(
                'JSON encoding failed.'
            );
        }



        $curl = curl_init(
            self::API_URL
        );


        if ($curl === false) {

            throw new AIException(
                'Unable to initialize cURL.'
            );
        }



        curl_setopt_array($curl, [

            CURLOPT_POST =>
                true,

            CURLOPT_RETURNTRANSFER =>
                true,

            CURLOPT_TIMEOUT =>
                $this->timeout,


            CURLOPT_HTTPHEADER => [

                'Content-Type: application/json',

                'Authorization: Bearer ' .
                    $this->apiKey,

                'User-Agent: MirnesAI/1.0'
            ],


            CURLOPT_POSTFIELDS =>
                $json
        ]);



        $response = curl_exec($curl);


        $curlError = curl_error($curl);


        $status = (int) curl_getinfo(
            $curl,
            CURLINFO_HTTP_CODE
        );


        curl_close($curl);



        if ($response === false) {

            throw new AIException(
                'OpenAI connection error: ' .
                $curlError
            );
        }



        $data = json_decode(
            $response,
            true
        );



        if (!is_array($data)) {

            throw new AIException(
                'Invalid OpenAI response.'
            );
        }



        if ($status >= 400) {

            throw new AIException(

                $data['error']['message']
                ??
                'OpenAI request failed.',

                $status
            );
        }



        return $this->parseResponse(
            $data
        );
    }




    /**
     * Parse OpenAI response.
     */
    private function parseResponse(
        array $data
    ): AIResponse {


        $message = '';



        /**
         * Direct output_text
         */
        if (
            isset($data['output_text'])
            &&
            is_string($data['output_text'])
        ) {

            $message =
                $data['output_text'];

        }



        /**
         * Standard Responses API output
         */
        elseif (
            isset($data['output'])
            &&
            is_array($data['output'])
        ) {


            foreach ($data['output'] as $output) {


                if (
                    !isset($output['content'])
                    ||
                    !is_array($output['content'])
                ) {

                    continue;
                }



                foreach ($output['content'] as $content) {


                    if (
                        ($content['type'] ?? '')
                        === 'output_text'
                    ) {

                        $message .=
                            $content['text']
                            ?? '';
                    }
                }
            }
        }



        return new AIResponse(

            trim($message),


            (string)(
                $data['model']
                ?? ''
            ),


            (int)(
                $data['usage']['input_tokens']
                ?? 0
            ),


            (int)(
                $data['usage']['output_tokens']
                ?? 0
            ),


            (int)(
                $data['usage']['total_tokens']
                ?? 0
            ),


            (string)(
                $data['status']
                ?? ''
            ),


            $data
        );
    }




    /**
     * Test OpenAI connection.
     */
    public function test(): bool
    {
        try {

            $this->send([

                'model' =>
                    Config::get('openai/model')
                    ?? 'gpt-5-mini',


                'input' => [

                    [
                        'role' => 'user',

                        'content' => [

                            [
                                'type' =>
                                    'input_text',

                                'text' =>
                                    'Reply only with OK'
                            ]

                        ]

                    ]

                ]

            ]);


            return true;


        } catch(Throwable $e) {

            return false;
        }
    }

}