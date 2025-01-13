<?php
// login_process.php
include 'database.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string(trim($_POST['username']));
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (!empty($user['password']) && password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['username'] = $user['username'];
            header('Location: home.php'); // Redirect to homepage
            exit;
        } else {
            echo "Invalid password. <a href='login.php'>Try again</a>";
        }
    } else {
        echo "No user found with that username. <a href='register.php'>Register here</a>";
    }
}
?>
