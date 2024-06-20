<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bus schedule.css">
    <title>Bus Scheduling and Booking System</title>
    
</head>
<body>


    <section class="header">
        <nav>
            <a href="busschedule.php"><img src="images/logo.png" /></a>
            
            <div class="nav-links">
                <ul>
                    <li><a href="Home page.html">HOME</a></li>
                    <li><a href="busschedule.php">BOOKINGS</a></li>
                    <li><a href="about us.html">ABOUT US</a></li>
                    <li><a href="userprofile.php">USER PROFILE</a></li>
                    <li><a href="LOGIN"></a></li>
                    <li><a href="adminlogin.php">ADMINLOGIN</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <h1>User Table</h1>

    <br>

    <table>
        <tr>
            <th>Bus ID</th>
            <th>Route</th>
            <th>Available Buses</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        
        <?php include 'bus table.php' ?>

        
    </table>

    <div class="booking-form">
        <center><h2><b><u>Reserve a Bus Seat</u></b></h2></center>
        <br/>
        <form action="bus booking.php" method="post"><center>

            <label for="p_id">Enter Passenger ID:</label>
            <input type="text" id="passenger id" name="passenger id" placeholder="pXXXX" required><br><br>

            <label for="route">Enter Bus ID:</label>
            <input type="text" id="route" name="route" placeholder="XXXX" required><br><br>
            
            <label for="time">Enter Time:</label>
            <input type="time" id="time" name="time" placeholder="00:00" required><br><br>
            
            <label for="date">Enter Date:</label>
            <input type="date" id="date" name="date" placeholder="enter data" required><br><br>
            
            <input type="submit" value="BOOK NOW">
       </center>
    </form>
    </div>
    <br>
    

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
                <div  class="footer-col">
                    <h4>Follow Us</h4>
                    <img src="images/socialmedia.png">
                </div>
            </div>
        </section>
</body>
</html
