<?php
// Check if form data is received and was processed
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Optionally, you can log the form submission or email it
  // Example: mail("you@example.com", "New Submission", "Name: $name\nEmail: $email\nMessage: $message");
} else {
  // If the page is accessed directly (not via form submission), redirect to homepage
  header("Location: index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You - TeamWorks</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #4FACFE;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
      animation: fadeIn 1.5s ease-out;
    }

    .thank-you-container {
      background-color: #fff;
      border-radius: 8px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
      opacity: 0;
      animation: slideUp 1s ease-out forwards, fadeIn 1.5s ease-out forwards;
    }

    h1 {
      color: #1E90FF;
      font-size: 36px;
      margin-bottom: 15px;
      animation: bounceIn 1s ease-out forwards;
    }

    p {
      color: #555;
      font-size: 18px;
      margin-bottom: 20px;
    }

    .thank-you-button {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 16px;
      border-radius: 5px;
      display: inline-block;
      margin-top: 20px;
      transition: background-color 0.3s ease;
      opacity: 0;
      animation: fadeInButton 2s ease-out forwards;
    }

    .thank-you-button:hover {
      background-color: #0056b3;
    }

    .back-to-home {
      margin-top: 20px;
      font-size: 14px;
      color: #007bff;
      text-decoration: none;
    }

    .back-to-home:hover {
      text-decoration: underline;
    }

    /* Keyframes for animations */
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes slideUp {
      0% {
        transform: translateY(50px);
        opacity: 0;
      }

      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes bounceIn {
      0% {
        transform: scale(0.5);
        opacity: 0;
      }

      50% {
        transform: scale(1.1);
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes fadeInButton {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }
  </style>
</head>

<body>
  <div class="thank-you-container">
    <h1>Thank You for Your Message!</h1>
    <p>We appreciate you taking the time to reach out to us. Our team will get back to you as soon as possible.</p>
    <a href="index.html" class="thank-you-button">Return to Homepage</a>
    </p>
  </div>
</body>

</html>
