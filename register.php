<?php
// Start the session
session_start();

$errors = [];
$success = "";

// Handle registration form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirm_password = trim($_POST['confirm_password'] ?? '');

    // Validation
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    } elseif ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    } else {
        $usersFile = 'users.json';

       
        // Check if username is taken
        if (isset($users[$username])) {
            $errors[] = "Username already exists.";
        } else {
            // Save user
            $users[$username] = password_hash($password, PASSWORD_DEFAULT);
            file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

            $success = "Registration successful! You can now <a href='user_login.php'>log in</a>.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Registration</title>
  <link rel="stylesheet" href="styles.css"> <!-- Link to your existing CSS -->
</head>
<body>
  <div class="booking-section">
    <h2>Register</h2>

    <?php if (!empty($errors)): ?>
      <div style="color: red;">
        <?php foreach ($errors as $error): ?>
          <p><?= htmlspecialchars($error) ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
      <p style="color: green;"><?= $success ?></p>
    <?php endif; ?>

    <form action="register.php" method="POST" class="booking-form">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

    <label for="username">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm_password">Confirm Password</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

      <button type="submit">Register</button>
    </form>

    <p style="text-align: center; margin-top: 2rem;">
      Already have an account? 
      <a href="user_login.php" style="color:rgb(247, 245, 244); font-weight: 500;">Login here</a>
    </p>
  </div>
</body>
</html>
