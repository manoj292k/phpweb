

<?php
include 'header.php';
// session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to E-Commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .content {
            padding: 20px;
            text-align: center;
            color: black;
        }
        .logout {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome, back <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    </div>
    <div class="content">
        <h2>Explore Our Products</h2>
        <p>Check out the latest collections and offers.</p>
        <div class="logout">
            
        </div>
    </div>
</body>
</html>
