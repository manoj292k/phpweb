<?php
// Start the session
session_start();
?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: black;
        color: white;
    }
    .container {
        background-color: black;
        color: white;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .container h1 {
        color: whitesmoke;
        margin: 0;
    }
    .container a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
        transition: color 0.3s ease;
    }
    .container a:hover {
        color: #ff9900;
    }
    .nav-links {
        display: flex;
        align-items: center;
    }
</style>

<header>
    <div class="container">
        <h1>ABC</h1>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</header>
