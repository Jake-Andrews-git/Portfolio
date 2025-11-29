<?php
declare(strict_types=1);

/**
 * Front controller and lightweight router.
 */

require_once __DIR__ . '/../config/config.php';

spl_autoload_register(function (string $class): void {
    $baseDir = dirname(__DIR__) . '/app/';
    $path = $baseDir . str_replace('\\', '/', $class) . '.php';

    if (file_exists($path)) {
        require_once $path;
    }
});

use Controllers\HomeController;
use Controllers\ContactController;

$config = $config ?? [];

$routes = [
    '' => [
        'controller' => HomeController::class,
        'action' => 'index',
        'methods' => ['GET'],
    ],
    'contact/submit' => [
        'controller' => ContactController::class,
        'action' => 'submit',
        'methods' => ['POST'],
    ],
];

$uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$routeKey = trim($uriPath, '/');

if (!array_key_exists($routeKey, $routes)) {
    if ($uriPath === '/' || $routeKey === '') {
        $routeKey = '';
    } else {
        http_response_code(404);
        echo 'Page not found.';
        exit;
    }
}

$route = $routes[$routeKey];
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if (!in_array($requestMethod, $route['methods'], true)) {
    http_response_code(405);
    header('Allow: ' . implode(', ', $route['methods']));
    echo 'Method not allowed.';
    exit;
}

$controllerClass = $route['controller'];
$action = $route['action'];

if (!class_exists($controllerClass)) {
    http_response_code(500);
    echo 'Controller not available.';
    exit;
}

$controller = new $controllerClass($config);

if (!method_exists($controller, $action)) {
    http_response_code(500);
    echo 'Action not available.';
    exit;
}

$response = $controller->$action();
echo $response;

