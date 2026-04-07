<?php
require 'db.php';

$user = $_POST['user'] ?? '';
$service = $_POST['service'] ?? '';
$date = $_POST['date'] ?? '';
$status = 'Pending';

if ($user && $service && $date) {
    try {
        $stmt = $pdo->prepare("INSERT INTO bookings (user, service, date, status) VALUES (?, ?, ?, ?)");
        $stmt->execute([$user, $service, $date, $status]);

        echo "Booking submitted successfully. " <a href='booking.php'>Make another</a>;
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
} else {
    echo "Missing fields. <a href='booking.php'>Try again</a>";
}
?>
