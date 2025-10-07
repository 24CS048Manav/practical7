<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== "user") {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <style>
    body {
      background: linear-gradient(120deg, #43e97b, #38f9d7);
      color: white;
      font-family: Poppins, sans-serif;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: 0;
    }
    .box {
      background: rgba(255, 255, 255, 0.15);
      padding: 40px 60px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    }
    a {
      background: white;
      color: #43e97b;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 8px;
      margin-top: 20px;
      display: inline-block;
    }
    a:hover {
      background: #e3ffe9;
    }
  </style>
</head>
<body>
  <div class="box">
    <h1>Welcome User, <?php echo $_SESSION['username']; ?>!</h1>
    <p>You have limited access to the system.</p>
    <a href="Practical_7.php?logout=true">Logout</a>
  </div>
</body>
</html>
