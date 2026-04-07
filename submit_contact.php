<?php
$host = 'localhost';
$db   = 'dashboard_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if (!empty($name) && !empty($email)) {
        $stmt = $pdo->prepare("INSERT INTO contact_submissions (name, email) VALUES (?, ?)");
        $stmt->execute([$name, $email]);
        header("Location: thank_you.php");  // Redirect to a thank you page or back to form
        exit;
    } else {
        echo "Please fill all required fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
