<?php
session_start();

// Display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../../database/Database.php';
$database = new Database;
$pdo = $database->pdo_connect();

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
        // Registration logic
        $confirm_password = $_POST['confirm_password'];

        if ($password !== $confirm_password) {
            $error = "Passwords do not match!";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Insert the user into the database
            $user = new User($database->getConnection());
            $user->email = $email;
            $user->password = $hashed_password;
            $user->create();
            if ($user) {
                $_SESSION['message'] = "Registration successful! Please log in.";
                header("Location: ../../auth.php");
                exit;
            } else {
               $_SESSION['message'] = "Registration failed! Please try again";
               header("Location: ../../auth.php");
               exit;
            }
        }
    } elseif (isset($_POST['login'])) {
        // Login logic
    $email = $_POST['email'];
    $password = $_POST['password'];
     
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['email'];
            header("Location: ../../dashboard.php"); // Redirect to a secure page
            exit;
        } else {
            $_SESSION['message'] = "Invalid email or password!";
            header("Location: ../../auth.php");
            exit;
        }
    }elseif (isset($_POST['logout'])){
       session_unset();
       header("Location: ../../index.php");
    }
}
?>
