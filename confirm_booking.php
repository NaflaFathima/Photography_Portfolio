<?php
require 'session_check.php';
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $stmt = $pdo->prepare("UPDATE bookings SET status = 'Confirmed' WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: admin.php");
exit;
?>