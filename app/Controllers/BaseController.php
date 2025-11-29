<?php
declare(strict_types=1);

namespace Controllers;

/**
 * Provides shared helpers for all controllers (config access, view rendering).
 */
abstract class BaseController
{
    protected array $config;
    protected string $viewPath;

    public function __construct(array $config = [])
    {
        $this->config = $config;
        $this->viewPath = dirname(__DIR__) . '/Views/';
    }

    /**
     * Render a view inside the global layout.
     *
     * @param string $view View filename without extension.
     * @param array $data  Variables passed to the view.
     */
    protected function render(string $view, array $data = []): string
    {
        $viewFile = $this->viewPath . $view . '.php';

        if (!file_exists($viewFile)) {
            throw new \RuntimeException("View {$view} not found.");
        }

        $config = $this->config;
        extract($data, EXTR_SKIP);

        ob_start();

        include $this->viewPath . 'layout/header.php';
        include $viewFile;
        include $this->viewPath . 'layout/footer.php';

        return (string) ob_get_clean();
    }
}

