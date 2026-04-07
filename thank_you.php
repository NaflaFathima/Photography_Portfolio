<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <style>
    .popup {
      position: fixed;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #f0fff4;
      border: 2px solidrgb(14, 15, 15);
      padding: 30px 50px;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      text-align: center;
      font-family: Arial, sans-serif;
    }

    .popup h2 {
      color:rgb(3, 3, 3);
      margin-bottom: 10px;
    }

    .popup button {
      margin-top: 20px;
      padding: 8px 20px;
      background-color:rgb(5, 5, 5);
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .popup button:hover {
      background-color:rgb(7, 7, 7);
    }
  </style>
</head>
<body>

  <div class="popup">
    <h2>Your Form Submitted Successfully</h2>
    <button onclick="window.location.href='index.html'">Go Home</button>
  </div>

</body>
</html>
