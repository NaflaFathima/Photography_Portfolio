<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>User Dashboard</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

:root{
    --transition: all 300ms ease-in-out;
    --dark-color: #332e29;
    --light-color: #fff;
}

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    outline: 0;
}
html{
    font-size: 10px;
    scroll-behavior: smooth;
}
body{
    font-size: 1.6rem;
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    background-color: #f5eded;
    color: #130101;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 3rem 0;
}

.container{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    width: 100%;
}

h1, h2, h3{
    margin-top: 0;
    line-height: 1.3;
    margin-bottom: 2rem;
    color: var(--dark-color);
}

/* Layout grid */
.dashboard-grid {
    display: grid;
    grid-template-columns: 1fr 2fr 1fr;
    gap: 3rem;
}

/* Profile box */
.profile-box {
    background: #fff;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    position: sticky;
    top: 3rem;
}

.profile-box h2 {
    margin-bottom: 1rem;
}

.profile-box label {
    display: block;
    margin: 1rem 0 0.4rem;
    font-weight: 600;
}

.profile-box input[type="text"],
.profile-box input[type="email"],
.profile-box input[type="password"] {
    width: 100%;
    padding: 1rem 1.2rem;
    border-radius: 0.5rem;
    border: 1px solid #ccc;
    font-size: 1.4rem;
}

.profile-box button {
    margin-top: 1.5rem;
    background-color: var(--dark-color);
    color: var(--light-color);
    padding: 1rem 2rem;
    border-radius: 0.5rem;
    font-size: 1.4rem;
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
    border: none;
}

.profile-box button:hover {
    background-color: #000;
}

/* Bookings section */
.bookings-box {
    background: #fff;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

.bookings-box h2 {
    margin-bottom: 1rem;
    text-align: center;
}

.booking-list {
    list-style: none;
    padding: 0;
}

.booking-item {
    padding: 1rem;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.booking-item:last-child {
    border-bottom: none;
}

.booking-info {
    flex: 1;
}

.booking-status {
    padding: 0.3rem 0.8rem;
    border-radius: 0.5rem;
    font-weight: 600;
    font-size: 1.2rem;
    text-align: center;
}

.status-pending {
    background-color: #ffcc00;
    color: #332e29;
}

.status-confirmed {
    background-color: #28a745;
    color: white;
}

.status-cancelled {
    background-color: #dc3545;
    color: white;
}

/* Booking form */
.booking-section {
    width: 100%;
    max-width: 400px;
    padding: 2rem;
    background-color: rgba(0, 0, 0, 0.85);
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(255, 165, 0, 0.1);
    backdrop-filter: blur(4px);
    color: #fff;
}

.booking-section h2 {
    text-align: center;
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    letter-spacing: 1px;
}

.booking-form {
    display: flex;
    flex-direction: column;
}

.booking-form label {
    margin-top: 1rem;
    font-size: 0.9rem;
    color: #ccc;
}

.booking-form select,
.booking-form input {
    margin-top: 0.3rem;
    padding: 0.8rem 1.2rem;
    border: none;
    background: rgba(255, 255, 255, 0.05);
    color: #fff;
    border-radius: 50px;
    outline: none;
    transition: background 0.3s, border 0.3s;
    font-size: 1.4rem;
}

.booking-form select:focus,
.booking-form input:focus {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid #f0ece9;
}

.booking-form button {
    margin-top: 2rem;
    padding: 0.9rem;
    border: none;
    background-color: #000;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    border-radius: 50px;
    transition: background 0.3s ease;
    letter-spacing: 1px;
}

.booking-form button:hover {
    background-color: #f3f1f0;
    color: #000;
}

/* Notifications */
.notifications-box {
    background: #fff;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    max-height: 300px;
    overflow-y: auto;
}

.notifications-box h2 {
    margin-bottom: 1rem;
    text-align: center;
}

.notification-item {
    padding: 1rem;
    border-bottom: 1px solid #ddd;
    font-size: 1.3rem;
}

.notification-item:last-child {
    border-bottom: none;
}

.notification-unread {
    background-color: #fffae6;
}

/* Responsive */
@media (max-width: 900px) {
    .dashboard-grid {
        grid-template-columns: 1fr;
    }
    .profile-box {
        position: relative;
        top: auto;
        margin-bottom: 3rem;
    }
}
</style>
</head>
<body>

<div class="container">

  <?php

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
?>
<h2>Welcome <?php echo htmlspecialchars($username); ?></h2>


  <div class="dashboard-grid">

    <!-- Profile and password update -->
    <div class="profile-box">
      <h2>Profile Settings</h2>
      <form id="profileForm">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="user123" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="user@example.com" required>

        <label for="password">New Password</label>
        <input type="password" id="password" name="password" placeholder="Leave blank to keep current">

        <button type="submit">Update Profile</button>
      </form>
    </div>

    <!-- Bookings list -->
    <div class="bookings-box">
      <h2>Your Booked Packages</h2>
      <ul class="booking-list" id="bookingList">
        <!-- Bookings loaded here -->
        <li class="booking-item">
          <div class="booking-info">
            <strong>Beach Holiday Package</strong> <br />
            Price: $799.00 <br />
            Payment Status: Paid
          </div>
          <div class="booking-status status-confirmed">Confirmed</div>
        </li>
        <li class="booking-item">
          <div class="booking-info">
            <strong>Mountain Adventure</strong> <br />
            Price: $499.00 <br />
            Payment Status: Pending
          </div>
          <div class="booking-status status-pending">Pending</div>
        </li>
      </ul>
    </div>

    <!-- Booking new package -->
    <div class="booking-section">
      <h2>Book a Package</h2>
      <form class="booking-form" id="bookingForm">
        <label for="packageSelect">Select Package</label>
        <select id="packageSelect" name="package" required>
          <option value="" disabled selected>Select a package</option>
          <option value="1" data-price="799">Beach Holiday Package - $799.00</option>
          <option value="2" data-price="499">Mountain Adventure - $499.00</option>
          <option value="3" data-price="299">City Tour - $299.00</option>
        </select>

        <label for="bookingDate">Booking Date</label>
        <input type="date" id="bookingDate" name="bookingDate" required>

        <button type="submit">Book Now</button>
      </form>
    </div>

  </div>

  <!-- Notifications -->
  <div class="notifications-box" style="margin-top:3rem; max-width:1200px;">
    <h2>Notifications</h2>
    <div id="notifications">
      <div class="notification-item notification-unread">Your booking for Beach Holiday Package is confirmed by admin.</div>
      <div class="notification-item">Welcome to your dashboard!</div>
    </div>
  </div>

</div>

<script>
  // Example interaction: update displayed username on profile form change
  const usernameInput = document.getElementById('username');
  const usernameDisplay = document.getElementById('usernameDisplay');
  const profileForm = document.getElementById('profileForm');
  const bookingForm = document.getElementById('bookingForm');
  const bookingList = document.getElementById('bookingList');
  const notifications = document.getElementById('notifications');

  profileForm.addEventListener('submit', e => {
    e.preventDefault();
    const username = usernameInput.value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;

    if (!username || !email) {
      alert('Username and email are required.');
      return;
    }
    // Simulate update
    usernameDisplay.textContent = username;
    alert('Profile updated successfully!');
    profileForm.reset();
  });

  bookingForm.addEventListener('submit', e => {
    e.preventDefault();
    const packageSelect = document.getElementById('packageSelect');
    const packageId = packageSelect.value;
    const packageName = packageSelect.options[packageSelect.selectedIndex].text;
    const packagePrice = packageSelect.options[packageSelect.selectedIndex].dataset.price;
    const bookingDate = document.getElementById('bookingDate').value;

    if (!packageId || !bookingDate) {
      alert('Please select a package and booking date.');
      return;
    }

    // Add new booking to booking list
    const newBooking = document.createElement('li');
    newBooking.classList.add('booking-item');
    newBooking.innerHTML = `
      <div class="booking-info">
        <strong>${packageName}</strong><br />
        Price: $${packagePrice}.00<br />
        Payment Status: Pending
      </div>
      <div class="booking-status status-pending">Pending</div>
    `;
    bookingList.appendChild(newBooking);

    // Add notification
    const newNotification = document.createElement('div');
    newNotification.classList.add('notification-item', 'notification-unread');
    newNotification.textContent = `You booked ${packageName} for ${bookingDate}. Await admin confirmation.`;
    notifications.prepend(newNotification);

    bookingForm.reset();
  });
</script>

</body>
</html>
