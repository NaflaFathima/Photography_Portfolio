<?php
require 'db.php';

$stmt = $pdo->query("SELECT id, name AS user, package AS service, date, status 
                     FROM bookings 
                     ORDER BY date DESC 
                     LIMIT 10");

$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($bookings);
?>
