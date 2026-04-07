<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db.php'; // Use your PDO connection here

    $stmt = $pdo->prepare("INSERT INTO bookings (name, contact, email, package, shots, price, location) 
                           VALUES (?, ?, ?, ?, ?, ?, ?)");

    $stmt->execute([
        $_POST['name'],
        $_POST['contact'],
        $_POST['email'],
        $_POST['package'],
        $_POST['shots'],
        $_POST['price'],
        $_POST['location']
    ]);

    header("Location: thank_you.php?submitted=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section class="booking-section">
    <div class="container">
      <h2>Book Your Package</h2>
      <form action="Booking.php" method="POST" class="booking-form">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Contact Number:</label>
        <input type="text" name="contact" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Package Name:</label>
        <input type="text" name="package" id="package" readonly required>
        <label>Number of Shots:</label>
        <input type="number" name="shots" required>
        <label>Price:</label>
        <input type="text" name="price" required>
        <label>Location:</label>
        <input type="text" name="location" required>
        <button type="submit">Submit Booking</button>
      </form>
    </div>
  </section>

  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const packageName = urlParams.get('package');
    if (packageName) {
      document.getElementById('package').value = packageName;
    }
  </script>
</body>
</html>
