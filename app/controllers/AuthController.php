<?php
class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->userModel->findByEmail($email);
            if ($user && AuthHelper::verifyPassword($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: index.php?url=dashboard");
                exit();
            } else {
                $error = "Email atau password salah!";
            }
        }
        require_once __DIR__ . '/../../views/pages/auth/login.php';
    }

    public function register() {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->userModel->register($username, $email, $password)) {
                header("Location: index.php?url=login");
                exit();
            } else {
                $error = "Registrasi gagal, coba lagi.";
            }
        }
        require_once __DIR__ . '/../../views/pages/auth/register.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?url=login");
        exit();
    }
}
