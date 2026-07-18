<?php
declare(strict_types=1);

if (!function_exists('portfolio_env')) {
    function portfolio_env(string $key, string $default = ''): string
    {
        $value = getenv($key);

        return is_string($value) && $value !== '' ? $value : $default;
    }
}

$config = [
    'app' => [
        'name' => 'Jake Andrews Portfolio',
        'environment' => portfolio_env('APP_ENV', 'development'),
        'base_url' => rtrim(portfolio_env('APP_BASE_URL', ''), '/'),
        'timezone' => 'Europe/London',
    ],
    'contact' => [
        'email' => portfolio_env('PORTFOLIO_CONTACT_EMAIL', 'jakegeorgeandrews04@gmail.com'),
    ],
    'links' => [
        'github' => portfolio_env('PORTFOLIO_GITHUB_URL', 'https://github.com/Jake-Andrews-git'),
        'linkedin' => portfolio_env('PORTFOLIO_LINKEDIN_URL', 'https://www.linkedin.com/in/jake-andrews-4906233a6/'),
        'live' => portfolio_env('PORTFOLIO_LIVE_URL'),
    ],
    'portfolio' => require __DIR__ . '/portfolio.php',
];

date_default_timezone_set($config['app']['timezone']);
