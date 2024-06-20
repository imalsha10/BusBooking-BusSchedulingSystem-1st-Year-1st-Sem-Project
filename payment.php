<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bus schedule.css">
    <link rel="stylesheet" href="payment.css">
    <title>Payment Details</title>
</head>
<body>
<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve form data
      $name = $_POST['name'];
      $email = $_POST['email'];
      $cardNumber = $_POST['cardNumber'];
      $expiration = $_POST['expiration'];
      $cvv = $_POST['cvv'];

      // Connect to the database
      $connection = mysqli_connect("localhost", "root", "", "bus_shcheduling_booking_system");

      // Check if the connection is successful
      if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
      }

      // Prepare and execute SQL statement to insert data into the "payment" table
      $query = "INSERT INTO payment (name, email, cardnumber, `expiration date`, cvv) VALUES ('$name', '$email', '$cardNumber', '$expiration', '$cvv')";

      if (mysqli_query($connection, $query)) {
        echo "Payment details inserted successfully.";
      } else {
        echo "Error inserting payment details: " . mysqli_error($connection);
      }

      // Close the database connection
      mysqli_close($connection);
    }
?>


    <section class="header">
        <nav>
            <a href="busschedule.php"><img src="images/logo.png" /></a>
            <!-- nav bar -->
            <div class="nav-links">
                <ul>
                    <li><a href="Home page.html">HOME</a></li>
                    <li><a href="busschedule.php">BOOKINGS</a></li>
                    <li><a href="about us.html">ABOUT US</a></li>
                    <li><a href="feedback.php"> FEEDBACKS</a></li>
                    <li><a href="user profile.php">USER PROFILE</a></li>
                    <li><a href="LOGIN"></a></li>
                    <li><a href="adminlogin.php">ADMINLOGIN</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <h1>Payment Details</h1>
  
    <form method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="cardNumber">Card Number:</label>
      <input type="text" id="cardNumber" name="cardNumber" required>
      
      <label for="expiration">Expiration Date:</label>
      <input type="text" id="expiration" name="expiration" required>
      
      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv" required>
      
      <input type="submit" value="Pay Now">
    </form>
    <section class="footer">
      <div class="row">
          <div class="footer-col">
              <div class="footer-links">
                  <ul>
                      <li><a href="#">Contact us</a></li>
                      <li><a href="FAQ.html">FAQ</a></li>
                      <li><a href="#">T&C</a></li>
                  </ul>
              </div>
          </div>
          <div class="footer-col">
              <p>Made of Payment</p>
              <img src="images/payments.png">
          </div>
          <div class="footer-col">
              <h4>Follow Us</h4>
              <img src="images/socialmedia.png">
          </div>
      </div>
    </section>
</body>
</html>
