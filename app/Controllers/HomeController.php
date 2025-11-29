<?php
declare(strict_types=1);

namespace Controllers;

/**
 * Handles rendering the main landing page.
 */
class HomeController extends BaseController
{
    public function index(): string
    {
        $alerts = $this->getAlertFromQuery();

        return $this->render('home', [
            'pageTitle' => 'Home | ' . ($this->config['app']['name'] ?? 'Portfolio'),
            'alerts' => $alerts,
        ]);
    }

    /**
     * Reads status/message from the query string for contact form feedback.
     */
    private function getAlertFromQuery(): ?array
    {
        if (empty($_GET['status']) || empty($_GET['message'])) {
            return null;
        }

        $status = $_GET['status'] === 'success' ? 'success' : 'danger';
        $message = filter_var($_GET['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        return [
            'type' => $status,
            'message' => $message,
        ];
    }
}

