<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <link rel="stylesheet" href="head.css">
</head>
<body>
    <div class="container">
     <section class="header">
        <nav>
            <a href="user profile.php"><img src="images/logo.png"></a>
            
            <div class="nav-links">
                <ul>
                    <li><a href="Homepage.html">HOME</a></li>
                    <li><a href="busschedule.php">BOOKINGS</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="userprofile.php">USER PROFILE</a></li>
                    <li><a href="LOGIN"></a></li>
                    <li> <a href="adminlogin.php">ADMIN LOGIN</a></li>
                    
                </ul>
            </div>
        </nav>
        
        
                <div class="inner-row">
                    
                        <div class="card-body text-center">
                            <div class="img1">
                                <img class="img-account-profile " src="https://img.freepik.com/premium-vector/people-saving-money_24908-51569.jpg?w=740" alt="profile pic">
                            </div>
                            
                            <div class="card-header">
                                    
                                <form action="searchById.php" method="post">
                                    <input type="text" name="key" placeholder="enter user name">
                                    <input class="btn-primary"  type="submit" value="Search by person">
                                
                                </form>
                        </div>
                    
                
                </div>
        
        
        
    </section>
            
        
        




    <section class="footer">
        <div class="row">
            <div class="footer-col">

                <div class="footer-links">
                    <ul>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">FAQ</a></li>
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
</div>
</body>
</html>
