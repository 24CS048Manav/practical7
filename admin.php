<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== "admin") {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <style>
    body {
      background: linear-gradient(120deg, #ff9966, #ff5e62);
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
      color: #ff5e62;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 8px;
      margin-top: 20px;
      display: inline-block;
    }
    a:hover {
      background: #ffe3e3;
    }
  </style>
</head>
<body>
  <div class="box">
    <h1>Welcome Admin, <?php echo $_SESSION['username']; ?>!</h1>
    <p>You have admin-level access to the system.</p>
    <a href="Practical_7.php?logout=true">Logout</a>
  </div>
</body>
</html>
