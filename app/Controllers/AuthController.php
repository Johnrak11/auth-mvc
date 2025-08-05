<?php
require_once __DIR__ . '/../Models/User.php';

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = User::findByUsername($username);

            if ($user && hash("sha256", $password) === $user['password']) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: /dashboard');
                exit();
            } else {
                $error = "Invalid credentials.";
            }
        }
        include __DIR__ . '/../Views/login.php';
    }

    public function dashboard()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
        include __DIR__ . '/../Views/dashboard.php';
    }
    public function exercise()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
        include __DIR__ . '/../Views/Exercise/hello.php';
    }
}
