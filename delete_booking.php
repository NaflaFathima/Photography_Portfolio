<?php
require 'session_check.php';
require 'db.php';

$id = $_POST['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM bookings WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: admin.php");
?>