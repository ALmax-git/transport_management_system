<?php
session_start();

// Display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/app/models/User.php';

require_once __DIR__ . '/database/Database.php';

$database = new Database;
$pdo = $database->pdo_connect();


// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (isset($_POST['register'])) {
        // Registration logic
        $confirm_password = trim($_POST['confirm_password']);

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
                header("Location: auth.php");
                exit;
            } else {
                $error = "Registration failed! Please try again.";
            }
        }
    } elseif (isset($_POST['login'])) {
        // Login logic
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['email'];
            header("Location: dashboard.php"); // Redirect to a secure page
            exit;
        } else {
            $error = "Invalid email or password!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register | Borno Express</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .auth-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .auth-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .auth-container form {
            display: flex;
            flex-direction: column;
        }

        .auth-container form input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .auth-container form button {
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .auth-container form button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .message {
            color: green;
            font-size: 14px;
        }

        .switch {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="auth-container">
        <?php if (isset($_SESSION['message'])): ?>
            <p class="message"><?= $_SESSION['message'];
                                unset($_SESSION['message']); ?></p>
        <?php endif; ?>
        <?php if (isset($error)): ?>
            <p class="error"><?= $error; ?></p>
        <?php endif; ?>

        <?php if (!isset($_GET['action']) || $_GET['action'] == 'login'): ?>
            <h2>Login</h2>
            <form method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
            <div class="switch">
                <p>Don't have an account? <a href="auth.php?action=register">Register</a></p>
            </div>
        <?php elseif ($_GET['action'] == 'register'): ?>
            <h2>Register</h2>
            <form method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit" name="register">Register</button>
            </form>
            <div class="switch">
                <p>Already have an account? <a href="auth.php?action=login">Login</a></p>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>
