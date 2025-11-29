<?php
declare(strict_types=1);

namespace Models;

use PDO;
use PDOException;

/**
 * Simple SQLite-backed model to store contact form submissions.
 */
class MessageModel
{
    private PDO $pdo;

    public function __construct(string $sqlitePath)
    {
        $directory = dirname($sqlitePath);
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $this->pdo = new PDO('sqlite:' . $sqlitePath);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->createTableIfNeeded();
    }

    public function saveMessage(string $name, string $email, string $message): bool
    {
        $sql = 'INSERT INTO contact_messages (name, email, message, created_at)
                VALUES (:name, :email, :message, :created_at)';

        $statement = $this->pdo->prepare($sql);

        try {
            return $statement->execute([
                ':name' => $name,
                ':email' => $email,
                ':message' => $message,
                ':created_at' => (new \DateTimeImmutable())->format('Y-m-d H:i:s'),
            ]);
        } catch (PDOException $exception) {
            error_log('Failed to save contact message: ' . $exception->getMessage());
            return false;
        }
    }

    private function createTableIfNeeded(): void
    {
        $sql = <<<SQL
        CREATE TABLE IF NOT EXISTS contact_messages (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            email TEXT NOT NULL,
            message TEXT NOT NULL,
            created_at TEXT NOT NULL
        )
        SQL;

        $this->pdo->exec($sql);
    }
}

