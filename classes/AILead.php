<?php
/**
 * AILead.php
 *
 * Database entity for AI generated leads.
 *
 * Stores potential clients collected through Mirnes AI.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class AILead extends Entity
{
    /**
     * Database table name.
     */
    protected static string $tableName = 'ai_leads';


    /**
     * Primary key column.
     */
    protected static string $keyColumn = 'id';



    /**
     * Primary key value.
     */
    public int $id = 0;



    /**
     * Conversation ID.
     */
    public ?int $conversation_id = null;



    /**
     * Visitor name.
     */
    public ?string $name = null;



    /**
     * Visitor email.
     */
    public ?string $email = null;



    /**
     * Visitor phone.
     */
    public ?string $phone = null;



    /**
     * Project type.
     */
    public ?string $project_type = null;



    /**
     * Project description.
     */
    public ?string $message = null;



    /**
     * Lead status.
     *
     * new | contacted | converted | closed
     */
    public string $status = 'new';



    /**
     * Created date.
     */
    public ?string $created_at = null;



    /**
     * Updated date.
     */
    public ?string $updated_at = null;




    /**
     * Create a new lead.
     */
    public static function create(
        array $data
    ): self {


        $status = $data['status'] ?? 'new';


        if (!self::isValidStatus($status)) {

            $status = 'new';

        }



        $db = DB::getInstance();



        $stmt = $db->prepare(
            "
            INSERT INTO " . static::$tableName . "
            (
                conversation_id,
                name,
                email,
                phone,
                project_type,
                message,
                status,
                created_at,
                updated_at
            )
            VALUES
            (
                :conversation_id,
                :name,
                :email,
                :phone,
                :project_type,
                :message,
                :status,
                NOW(),
                NOW()
            )
            "
        );



        $stmt->execute([

            'conversation_id' =>
                $data['conversation_id'] ?? null,


            'name' =>
                $data['name'] ?? null,


            'email' =>
                $data['email'] ?? null,


            'phone' =>
                $data['phone'] ?? null,


            'project_type' =>
                $data['project_type'] ?? null,


            'message' =>
                $data['message'] ?? null,


            'status' =>
                $status

        ]);



        $lead = static::get(
            (int)$db->lastInsertId()
        );



        if (!$lead instanceof static) {

            throw new RuntimeException(
                'Failed to create AI lead.'
            );
        }



        return $lead;
    }





    /**
     * Get leads by conversation.
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
            ORDER BY id DESC
            "
        );



        $stmt->execute([

            'conversation_id' =>
                $conversationId

        ]);



        return $stmt->fetchAll(
            PDO::FETCH_CLASS,
            static::class
        );
    }





    /**
     * Get leads by status.
     */
    public static function getByStatus(
        string $status
    ): array {


        $db = DB::getInstance();



        $stmt = $db->prepare(
            "
            SELECT *
            FROM " . static::$tableName . "
            WHERE status = :status
            ORDER BY id DESC
            "
        );



        $stmt->execute([

            'status' =>
                $status

        ]);



        return $stmt->fetchAll(
            PDO::FETCH_CLASS,
            static::class
        );
    }





    /**
     * Update lead status.
     */
    public function setStatus(
        string $status
    ): bool {


        if (!self::isValidStatus($status)) {

            return false;

        }



        $db = DB::getInstance();



        $stmt = $db->prepare(
            "
            UPDATE " . static::$tableName . "
            SET
                status = :status,
                updated_at = NOW()
            WHERE id = :id
            "
        );



        return $stmt->execute([

            'status' =>
                $status,


            'id' =>
                $this->id

        ]);
    }





    /**
     * Check valid status.
     */
    private static function isValidStatus(
        string $status
    ): bool {

        return in_array(

            $status,

            [
                'new',
                'contacted',
                'converted',
                'closed'
            ],

            true
        );
    }





    /**
     * Mark lead as contacted.
     */
    public function markContacted(): bool
    {
        return $this->setStatus(
            'contacted'
        );
    }





    /**
     * Mark lead as converted.
     */
    public function markConverted(): bool
    {
        return $this->setStatus(
            'converted'
        );
    }





    /**
     * Close lead.
     */
    public function close(): bool
    {
        return $this->setStatus(
            'closed'
        );
    }





    /**
     * Check if lead is new.
     */
    public function isNew(): bool
    {
        return $this->status === 'new';
    }





    /**
     * Get lead summary.
     */
    public function summary(): string
    {

        $name = $this->name ?? 'Visitor';


        $project =
            $this->project_type
            ?? 'Website project';



        return $name . ' - ' . $project;
    }
}