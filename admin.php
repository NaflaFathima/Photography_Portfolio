
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 280px;
            background-color: #000;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }
        .sidebar-header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            background-color: white;
            color: black;
            width: 100%;
        }
        .nav-btn {
            width: 90%;
            margin: 10px 0;
            padding: 15px;
            font-size: 16px;
            background-color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .nav-btn:hover {
            background-color: #ddd;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            position: relative;
        }
        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #111;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">ADMIN DASHBOARD</div>
        <button class="nav-btn" onclick="location.href='get_recent_bookings.php'">Recent Bookings</button>
        <button class="nav-btn" onclick="location.href='get_photo_stats.php'">Photo Status</button>
        <button class="nav-btn" onclick="location.href='db_users.php'">Users</button>
    </div>
    <div class="main-content">
        <button class="logout-btn" onclick="location.href='logout.php'">Logout</button>
        <!-- Main dynamic content can go here -->
    </div>
</body>
</html>
