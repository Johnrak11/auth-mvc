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

    public function homework()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
        include __DIR__ . '/../Views/Homework/index.php';
    }

    public function exercise1()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $chicken = $_POST['chicken'] ?? '';
            $duck = $_POST['duck'] ?? '';
            $goose = $_POST['goose'] ?? '';
            $chickenPrice = 15000;
            $duckPrice = 13000;
            $goosePrice = 25000;

            $total = $chicken * $chickenPrice + $duck * $duckPrice + $goose * $goosePrice;
        }

        include __DIR__ . '/../Views/Exercise/ex1.php';
    }
    public function exercise2()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $a = $_POST['a'] ?? '';
            $b = $_POST['b'] ?? '';
            $c = $_POST['c'] ?? '';

            // 1) a² + 2ab + b²
            $result1 = pow($a, 2) + 2 * $a * $b + pow($b, 2);
            // 2) (a + b) - c
            $result2 = ($a + $b) - $c;
            // 3) a³ - b³
            $result3 = pow($a, 3) - pow($b, 3);
            // 4) ab + bc + ac
            $result4 = $a * $b + $b * $c + $a * $c;
        }

        include __DIR__ . '/../Views/Exercise/ex2.php';
    }
    public function exercise3()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
        include __DIR__ . '/../Views/Exercise/ex3.php';
    }
}
