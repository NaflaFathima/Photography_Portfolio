<?php
// login_option.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Option</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    :root {
      --dark-color: #332e29;
      --light-color: #fff;
      --accent-color: #5a4632;
      --transition: all 0.3s ease;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    html, body {
      height: 100%;
      background: linear-gradient(135deg, #f0e6d2, #e3dac9);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      color: var(--dark-color);
    }

    h1 {
      font-size: 3rem;
      font-weight: 600;
      margin-bottom: 3rem;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .btn-login {
      background-color: var(--dark-color);
      color: var(--light-color);
      padding: 1.2rem 3rem;
      margin: 1rem;
      font-size: 1.6rem;
      text-transform: uppercase;
      font-weight: 500;
      text-decoration: none;
      transition: background-color 0.3s ease;
      border-radius: 0.5rem;
    }

    .btn-login:hover {
      background-color: var(--accent-color);
    }
  </style>
</head>
<body>
  <h1>Select Login</h1>
  <a href="login.php" class="btn-login">Admin Login</a>
  <a href="user_login.php" class="btn-login">User Login</a>
</body>
</html>
