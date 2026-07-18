<?php
/**
 * AIMessage.php
 *
 * Database entity for AI conversation messages.
 *
 * Stores visitor messages and AI responses.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class AIMessage extends Entity
{
    /**
     * Database table name.
     */
    protected static string $tableName = 'ai_messages';


    /**
     * Primary key column.
     */
    protected static string $keyColumn = 'id';



    public int $id = 0;


    /**
     * Conversation ID.
     */
    public int $conversation_id = 0;


    /**
     * Message role.
     *
     * visitor | assistant | system
     */
    public string $role = 'visitor';


    /**
     * Message content.
     */
    public string $message = '';


    /**
     * OpenAI model.
     */
    public ?string $model = null;


    /**
     * Token usage.
     */
    public int $tokens = 0;


    /**
     * Created date.
     */
    public ?string $created_at = null;



    /**
     * Get messages from conversation.
     */
    public static function getByConversation(
        int $conversationId
    ): array {

        $db = DB::getInstance();


        $stmt = $db->prepare(
            "
            SELECT *
            FROM " . static::$tableName . "
            WHERE conversation_id = :conversation_id
            ORDER BY id ASC
            "
        );


        $stmt->execute([
            'conversation_id' => $conversationId
        ]);


        return $stmt->fetchAll(
            PDO::FETCH_CLASS,
            static::class
        );
    }



    /**
     * Create message.
     */
    public static function create(
        array $data
    ): self {


        $db = DB::getInstance();


        $stmt = $db->prepare(
            "
            INSERT INTO " . static::$tableName . "
            (
                conversation_id,
                role,
                message,
                model,
                tokens,
                created_at
            )

            VALUES

            (
                :conversation_id,
                :role,
                :message,
                :model,
                :tokens,
                NOW()
            )
            "
        );


        $stmt->execute([

            'conversation_id' =>
                $data['conversation_id'],

            'role' =>
                $data['role'] ?? 'visitor',

            'message' =>
                $data['message'] ?? '',

            'model' =>
                $data['model'] ?? null,

            'tokens' =>
                $data['tokens'] ?? 0
        ]);



        $message = static::get(
            (int)$db->lastInsertId()
        );


        if (!$message instanceof static) {

            throw new RuntimeException(
                'Failed to create AI message.'
            );
        }


        return $message;
    }



    /**
     * OpenAI formatted history.
     */
    public static function getHistory(
    int $conversationId
): array {

    $messages = static::getByConversation(
        $conversationId
    );


    $history = [];


    foreach ($messages as $message) {

        $history[] = [

            'role' =>
                $message->role === 'visitor'
                    ? 'user'
                    : $message->role,

            'message' =>
                $message->message
        ];
    }


    return $history;
}



    /**
     * Visitor message?
     */
    public function isVisitor(): bool
    {
        return $this->role === 'visitor';
    }



    /**
     * Assistant message?
     */
    public function isAssistant(): bool
    {
        return $this->role === 'assistant';
    }



    /**
     * Short preview.
     */
    public function preview(
        int $length = 80
    ): string {


        $text = trim($this->message);


        if (mb_strlen($text) <= $length) {

            return $text;
        }


        return mb_substr(
            $text,
            0,
            $length
        ) . '...';
    }
}