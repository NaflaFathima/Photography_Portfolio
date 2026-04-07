<?php
session_start();

// Replace with your desired credentials
$correct_username = 'admin';
$correct_password = 'admin123';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Simple check
if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['admin_logged_in'] = true;
    header("Location: admin.php");
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Login</title>
  <link rel = "stylesheet" href = "styles.css">
  <link rel = "stylesheet" href = "css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <form action="login.php" method="POST" class="bg-white p-6 rounded-xl shadow-md w-80">
    <h2 class="text-2xl font-bold mb-4 text-center">Admin Login</h2>
    <input type="text" name="username" placeholder="Username" class="w-full p-2 mb-3 border rounded" required />
    <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-4 border rounded" required />
    <button type="submit" class="bg-blue-500 text-white w-full py-2 rounded hover:bg-blue-600">Login</button>
  </form>
</body>
</html>
