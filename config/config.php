<?php
declare(strict_types=1);

/**
 * Global configuration values.
 * Fill in placeholders (e.g., email credentials) before deploying.
 */

$config = [
    'app' => [
        'name' => 'Jake Andrews Portfolio',
        'environment' => 'development',
        'base_url' => '/',
        'timezone' => 'Europe/London',
    ],
    'contact' => [
        'method' => 'sqlite', // options: sqlite, email
        'email' => [
            'to' => 'you@example.com',
            'from' => 'portfolio@example.com',
            'smtp_host' => '',
            'smtp_port' => 587,
            'smtp_username' => '',
            'smtp_password' => '',
        ],
        'storage' => [
            'sqlite_path' => __DIR__ . '/../storage/data/PortfolioDB.sqlite',
        ],
    ],
    'logging' => [
        'path' => __DIR__ . '/../storage/logs/app.log',
    ],
];

date_default_timezone_set($config['app']['timezone']);

