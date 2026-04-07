<?php
require 'db.php';

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];
$status = $data['status'];

$stmt = $pdo->prepare("UPDATE bookings SET status = ? WHERE id = ?");
$success = $stmt->execute([$status, $id]);

echo json_encode(['success' => $success]);
?>
