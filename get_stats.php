<?php
require 'db.php';

$total = $pdo->query("SELECT COUNT(*) FROM bookings")->fetchColumn();
$pending = $pdo->query("SELECT COUNT(*) FROM bookings WHERE status = 'Pending'")->fetchColumn();
$confirmed = $pdo->query("SELECT COUNT(*) FROM bookings WHERE status = 'Confirmed'")->fetchColumn();
$completed = $pdo->query("SELECT COUNT(*) FROM bookings WHERE status = 'Completed'")->fetchColumn();

echo json_encode([
  'total' => $total,
  'pending' => $pending,
  'confirmed' => $confirmed,
  'completed' => $completed
]);
?>


