<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Static test credentials
    $static_users = [
        'admin' => [
            'password' => 'admin123',
            'role' => 'admin'
        ],
        'user1' => [
            'password' => 'user123',
            'role' => 'user'
        ]
    ];

    if (isset($static_users[$username]) && $password === $static_users[$username]['password']) {
        $_SESSION['user_id'] = 1; // Dummy ID
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $static_users[$username]['role'];

        if ($_SESSION['role'] === 'admin') {
            header("Location: user_dashboard.php");
        } else {
            header("Location: user_dashboard.php");
        }
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Login</title>
  <link rel="stylesheet" href="styles.css"> <!-- Your existing CSS -->
</head>
<body>
  <div class="booking-section">
    <h2>User Login</h2>
    
    <?php if (!empty($error)) : ?>
      <p style="color: red; text-align: center;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form action="user_login.php" method="POST" class="booking-form">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>

    <p style="text-align: center; margin-top: 2rem;">
      Don't have an account? 
      <a href="register.php" style="color:rgb(245, 243, 242); font-weight: 500;">Register here</a>
    </p>
  </div>
</body>
</html>
