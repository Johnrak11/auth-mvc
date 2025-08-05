<?php
require_once __DIR__ . '/../app/Controllers/AuthController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$auth = new AuthController();

switch (true) {
    case $uri === '/login' || $uri === '/':
        $auth->login();
        break;
    case $uri === '/dashboard':
        $auth->dashboard();
        break;
    case $uri === '/homework':
        $auth->homework();
        break;
    case $uri === '/exercise1':
        $auth->exercise1();
        break;
    case $uri === '/exercise2':
        $auth->exercise2();
        break;
    case $uri === '/exercise3':
        $auth->exercise3();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
