<?php
/**
 * AIRateLimiter.php
 *
 * Server-side rate limiting for Mirnes AI.
 *
 * Limits the number of AI requests sent from one IP address
 * during a configured time window.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class AIRateLimiter
{
    /**
     * Database table.
     */
    private const TABLE_NAME = 'ai_rate_limits';


    /**
     * Maximum number of requests in one window.
     */
    private int $maxRequests;


    /**
     * Window duration in seconds.
     */
    private int $windowSeconds;


    /**
     * Constructor.
     */
    public function __construct(
        int $maxRequests = 20,
        int $windowSeconds = 3600
    ) {
        $this->maxRequests =
            max(1, $maxRequests);

        $this->windowSeconds =
            max(60, $windowSeconds);
    }


    /**
     * Consume one request from the current visitor.
     *
     * @return array{
     *     allowed: bool,
     *     remaining: int,
     *     retry_after: int
     * }
     */
    public function consume(): array
    {
        $ipHash = $this->getIpHash();

        $db = DB::getInstance();

        /*
         * A transaction and row lock prevent simultaneous requests
         * from bypassing the limit.
         */
        $db->beginTransaction();

        try {
            $stmt = $db->prepare(
                "
                SELECT
                    request_count,
                    window_started_at
                FROM " . self::TABLE_NAME . "
                WHERE ip_hash = :ip_hash
                LIMIT 1
                FOR UPDATE
                "
            );

            $stmt->execute([
                'ip_hash' => $ipHash
            ]);

            $record = $stmt->fetch(
                PDO::FETCH_ASSOC
            );


            if ($record === false) {
                $this->createRecord(
                    $db,
                    $ipHash
                );

                $db->commit();

                return [
                    'allowed' => true,
                    'remaining' =>
                        max(
                            0,
                            $this->maxRequests - 1
                        ),
                    'retry_after' => 0
                ];
            }


            $windowStartedAt =
                strtotime(
                    (string) $record['window_started_at']
                );

            if ($windowStartedAt === false) {
                $windowStartedAt = time();
            }


            $elapsed =
                time() - $windowStartedAt;


            /*
             * Start a new rate-limit window.
             */
            if ($elapsed >= $this->windowSeconds) {
                $this->resetRecord(
                    $db,
                    $ipHash
                );

                $db->commit();

                return [
                    'allowed' => true,
                    'remaining' =>
                        max(
                            0,
                            $this->maxRequests - 1
                        ),
                    'retry_after' => 0
                ];
            }


            $requestCount =
                (int) $record['request_count'];


            if ($requestCount >= $this->maxRequests) {
                $retryAfter =
                    max(
                        1,
                        $this->windowSeconds - $elapsed
                    );

                $db->commit();

                return [
                    'allowed' => false,
                    'remaining' => 0,
                    'retry_after' => $retryAfter
                ];
            }


            $requestCount++;

            $update = $db->prepare(
                "
                UPDATE " . self::TABLE_NAME . "
                SET
                    request_count = :request_count,
                    updated_at = NOW()
                WHERE ip_hash = :ip_hash
                "
            );

            $update->execute([
                'request_count' => $requestCount,
                'ip_hash' => $ipHash
            ]);


            $db->commit();


            return [
                'allowed' => true,

                'remaining' =>
                    max(
                        0,
                        $this->maxRequests - $requestCount
                    ),

                'retry_after' => 0
            ];

        } catch (Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }

            throw $e;
        }
    }


    /**
     * Create first rate-limit record.
     */
    private function createRecord(
        PDO $db,
        string $ipHash
    ): void {
        $stmt = $db->prepare(
            "
            INSERT INTO " . self::TABLE_NAME . "
            (
                ip_hash,
                request_count,
                window_started_at,
                updated_at
            )
            VALUES
            (
                :ip_hash,
                1,
                NOW(),
                NOW()
            )
            "
        );

        $stmt->execute([
            'ip_hash' => $ipHash
        ]);
    }


    /**
     * Reset an expired window.
     */
    private function resetRecord(
        PDO $db,
        string $ipHash
    ): void {
        $stmt = $db->prepare(
            "
            UPDATE " . self::TABLE_NAME . "
            SET
                request_count = 1,
                window_started_at = NOW(),
                updated_at = NOW()
            WHERE ip_hash = :ip_hash
            "
        );

        $stmt->execute([
            'ip_hash' => $ipHash
        ]);
    }


    /**
     * Return a privacy-friendly IP hash.
     */
    private function getIpHash(): string
    {
        /*
         * REMOTE_ADDR cannot be changed through ordinary
         * client-supplied HTTP headers.
         */
        $ipAddress =
            $_SERVER['REMOTE_ADDR']
            ?? 'unknown';


        $secret =
            (string) (
                Config::get(
                    'security/rate_limit_secret'
                )
                ?? ''
            );


        if ($secret === '') {
            /*
             * Functional fallback, but setting a private secret
             * in core/init.php is strongly recommended.
             */
            return hash(
                'sha256',
                $ipAddress
            );
        }


        return hash_hmac(
            'sha256',
            $ipAddress,
            $secret
        );
    }
}