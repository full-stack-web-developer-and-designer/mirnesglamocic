<?php
/**
 * AIConversation.php
 *
 * Database entity for AI chat conversations.
 *
 * Stores visitor conversations with Mirnes AI.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class AIConversation extends Entity
{
    /**
     * Database table name.
     */
    protected static string $tableName = 'ai_conversations';


    /**
     * Primary key column.
     */
    protected static string $keyColumn = 'id';



    /**
     * Primary key value.
     */
    public int $id = 0;



    /**
     * Visitor IP address.
     */
    public ?string $ip_address = null;



    /**
     * Visitor name.
     */
    public ?string $name = null;



    /**
     * Visitor email.
     */
    public ?string $email = null;



    /**
     * Visitor user agent.
     */
    public ?string $user_agent = null;



    /**
     * Session identifier.
     */
    public ?string $session_id = null;



    /**
     * Conversation status.
     *
     * active | closed | archived
     */
    public string $status = 'active';



    /**
     * Created date.
     */
    public ?string $created_at = null;



    /**
     * Updated date.
     */
    public ?string $updated_at = null;





    /**
     * Get conversation by session ID.
     */
    public static function getBySession(
        string $sessionId
    ): ?self {


        $db = DB::getInstance();



        $stmt = $db->prepare(
            "
            SELECT *
            FROM " . static::$tableName . "
            WHERE session_id = :session_id
            LIMIT 1
            "
        );



        $stmt->execute([
            'session_id' => $sessionId
        ]);



        $conversation = $stmt->fetchObject(
            static::class
        );


        return $conversation instanceof static
            ? $conversation
            : null;
    }






    /**
     * Create new conversation.
     */
    public static function create(
        array $data
    ): self {


        $db = DB::getInstance();



        $stmt = $db->prepare(
            "
            INSERT INTO " . static::$tableName . "
            (
                ip_address,
                name,
                email,
                session_id,
                user_agent,
                status,
                created_at,
                updated_at
            )

            VALUES

            (
                :ip_address,
                :name,
                :email,
                :session_id,
                :user_agent,
                :status,
                NOW(),
                NOW()
            )
            "
        );



        $stmt->execute([


            'ip_address' =>
                $data['ip_address']
                ?? null,



            'name' =>
                $data['name']
                ?? null,



            'email' =>
                $data['email']
                ?? null,



            'session_id' =>
                $data['session_id']
                ?? session_id(),



            'user_agent' =>
                $data['user_agent']
                ?? ($_SERVER['HTTP_USER_AGENT'] ?? null),



            'status' =>
                $data['status']
                ?? 'active'

        ]);




        $conversation = static::get(
            (int) $db->lastInsertId()
        );



        if (!$conversation instanceof static) {

            throw new RuntimeException(
                'Failed to create AI conversation.'
            );

        }



        return $conversation;
    }







    /**
     * Update conversation.
     */
    public function update(
        array $data
    ): bool {


        $db = DB::getInstance();



        $stmt = $db->prepare(
            "
            UPDATE " . static::$tableName . "

            SET

                name = :name,
                email = :email,
                status = :status,
                updated_at = NOW()

            WHERE id = :id
            "
        );



        return $stmt->execute([


            'name' =>
                $data['name']
                ?? $this->name,



            'email' =>
                $data['email']
                ?? $this->email,



            'status' =>
                $data['status']
                ?? $this->status,



            'id' =>
                $this->id

        ]);

    }







    /**
     * Close conversation.
     */
    public function close(): bool
    {
        return $this->update([

            'status' => 'closed'

        ]);
    }







    /**
     * Check if conversation is active.
     */
    public function isActive(): bool
    {
        return $this->status === 'active';
    }
}