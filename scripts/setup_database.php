<?php
declare(strict_types=1);

/**
 * CLI script to create SQLite tables and insert mock data for PortfolioDB.sqlite.
 *
 *
 *
 *
 * Usage:
 *   php scripts/setup_database.php
 */

$projectRoot = dirname(__DIR__);

require_once $projectRoot . '/config/config.php';

$dbPath = $config['contact']['storage']['sqlite_path'] ?? $projectRoot . '/storage/data/PortfolioDB.sqlite';
$dbDirectory = dirname($dbPath);

if (!is_dir($dbDirectory) && !mkdir($dbDirectory, 0755, true) && !is_dir($dbDirectory)) {
    fwrite(STDERR, "Failed to create database directory: {$dbDirectory}" . PHP_EOL);
    exit(1);
}

try {
    $pdo = new PDO('sqlite:' . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('PRAGMA foreign_keys = ON;');
} catch (PDOException $exception) {
    fwrite(STDERR, 'Unable to connect to SQLite: ' . $exception->getMessage() . PHP_EOL);
    exit(1);
}

try {
    createContactMessagesTable($pdo);
    $inserted = seedContactMessages($pdo);

    fwrite(STDOUT, "Database ready at {$dbPath}. Seeded {$inserted} contact messages." . PHP_EOL);
    exit(0);
} catch (PDOException $exception) {
    fwrite(STDERR, 'Database setup failed: ' . $exception->getMessage() . PHP_EOL);
    exit(1);
}

/**
 * Create the contact_messages table if it does not exist.
 */
function createContactMessagesTable(PDO $pdo): void
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

    $pdo->exec($sql);
}

/**
 * Insert mock contact messages if the table is empty.
 */
function seedContactMessages(PDO $pdo): int
{
    $count = (int) $pdo->query('SELECT COUNT(*) FROM contact_messages')->fetchColumn();

    if ($count > 0) {
        return 0;
    }

    $seedRows = [
        [
            'name' => 'Alice Recruiter',
            'email' => 'alice.recruiter@example.com',
            'message' => 'Hi Jake, we loved your GitHub projects. Could we schedule an interview next week?',
        ],
        [
            'name' => 'Tech Hiring Manager',
            'email' => 'manager@innovatek.co.uk',
            'message' => 'We have a summer internship focused on FastAPI services. Interested in chatting?',
        ],
        [
            'name' => 'Hackathon Partner',
            'email' => 'buildwithus@devhub.com',
            'message' => 'Looking for a teammate experienced in data visualisation for an upcoming hackathon.',
        ],
    ];

    $statement = $pdo->prepare(
        'INSERT INTO contact_messages (name, email, message, created_at)
         VALUES (:name, :email, :message, :created_at)'
    );

    $now = (new DateTimeImmutable())->format('Y-m-d H:i:s');
    $inserted = 0;

    foreach ($seedRows as $row) {
        $statement->execute([
            ':name' => $row['name'],
            ':email' => $row['email'],
            ':message' => $row['message'],
            ':created_at' => $now,
        ]);
        $inserted++;
    }

    return $inserted;
}

