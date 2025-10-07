<?php
session_start();

// Logout handling
if (isset($_GET['logout'])) {
    session_destroy();
    setcookie("username", "", time() - 3600, "/");
    header("Location: index.html");
    exit();
}

// Login form handling
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Hardcoded credentials
    if ($username === "admin" && $password === "12345") {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        setcookie("username", $username, time() + 3600, "/");
        header("Location: admin.php");
        exit();
    } elseif ($username === "user" && $password === "12345") {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "user";
        setcookie("username", $username, time() + 3600, "/");
        header("Location: user.php");
        exit();
    } else {
        echo "<!DOCTYPE html>
        <html><body style='text-align:center;font-family:Poppins,sans-serif;margin-top:100px;color:red;'>
        <h2>Invalid Username or Password!</h2>
        <p><a href='index.html' style='color:blue;text-decoration:none;'>Try Again</a></p>
        </body></html>";
        exit();
    }
}

// If someone tries to visit directly
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>
