<?php
require_once __DIR__ . '/../app/Controllers/AuthController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$auth = new AuthController();

switch ($uri) {
    case '/login':
    case '/':
        $auth->login();
        break;
    case '/dashboard':
        $auth->dashboard();
        break;
    case '/exercise':
        $auth->exercise();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
