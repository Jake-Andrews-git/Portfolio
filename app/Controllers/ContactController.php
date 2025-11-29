<?php
declare(strict_types=1);

namespace Controllers;

use Models\MessageModel;

/**
 * Handles contact form submissions.
 */
class ContactController extends BaseController
{
    private ?MessageModel $messageModel = null;

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        if (($config['contact']['method'] ?? null) === 'sqlite') {
            $sqlitePath = $config['contact']['storage']['sqlite_path'] ?? '';
            if ($sqlitePath !== '') {
                $this->messageModel = new MessageModel($sqlitePath);
            }
        }
    }

    public function submit(): void
    {
        $name = trim((string) ($_POST['name'] ?? ''));
        $email = trim((string) ($_POST['email'] ?? ''));
        $message = trim((string) ($_POST['message'] ?? ''));

        $errors = $this->validate($name, $email, $message);

        if (!empty($errors)) {
            $this->redirectWithStatus('error', implode(' ', $errors));
        }

        $stored = $this->storeMessage($name, $email, $message);

        if (!$stored) {
            $this->redirectWithStatus('error', 'Unable to save your message right now. Please try again later.');
        }

        $this->redirectWithStatus('success', 'Thanks for reaching out! I will reply soon.');
    }

    private function validate(string $name, string $email, string $message): array
    {
        $errors = [];

        if ($name === '' || strlen($name) < 2) {
            $errors[] = 'Please enter your full name.';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please provide a valid email address.';
        }

        if ($message === '' || strlen($message) < 10) {
            $errors[] = 'Please include a message with at least 10 characters.';
        }

        return $errors;
    }

    private function storeMessage(string $name, string $email, string $message): bool
    {
        $method = $this->config['contact']['method'] ?? 'sqlite';

        if ($method === 'sqlite' && $this->messageModel instanceof MessageModel) {
            return $this->messageModel->saveMessage($name, $email, $message);
        }

        // Placeholder for future email sending implementation.
        return false;
    }

    private function redirectWithStatus(string $status, string $message): void
    {
        $query = http_build_query([
            'status' => $status,
            'message' => $message,
        ]);

        header('Location: /?' . $query);
        exit;
    }
}

