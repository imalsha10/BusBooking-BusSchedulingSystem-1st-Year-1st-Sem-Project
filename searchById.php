<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="head.css">
</head>
<body>
<br>
<div class="container">

    <section class="header">
        <nav>
            <a href="user profile.php"><img src="images/logo.png"></a>
            <!-- nav bar -->
            <div class="nav-links">
                <ul>
                    <li><a href="Homepage.html">HOME</a></li>
                    <li><a href="busschedule.php">BOOKINGS</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="userprofile.php">USER PROFILE</a></li>
                    <li><a href="LOGIN"></a></li>
                    <li> <a href="adminlogin.php">ADMIN LOGIN</a></li>
                </ul>
                <hr class="hr-1">
            </div>
        </nav>
        

        <div class="outer-table">
        <table class="table" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>first Name</th>
                    <th>last Name</th>
                    <th>Address</th>
                    <th>Nic</th>
                    <th>DOB</th>
                    <th>Age</th>
                    <th>E mail</th>
                    <th>Password</th>
                    <th>click</th>
                </tr>
            </thead>
            
            </section>
        <tbody>
        
        
        <?php
                include 'config.php';
                $key= $_POST['key'];
                $sql = "SELECT * FROM Passenger WHERE P_Id='$key'";
                $result=$connection->query($sql);
               

                while($row=$result->fetch_assoc()){
                        echo "
                        <tr>
                        <br>
                         
                        <td>$row[P_Id]</td>
                        <td>$row[F_Name] </td>
                        <td>$row[L_Name] </td>
                        <td>$row[Address] </td>
                        <td>$row[NIC] </td>
                        <td>$row[DOB] </td>
                        <td>$row[Age] </td>
                        <th>$row[Email]</th>
                        <td>$row[Password] </td>
                        <td>
                        
                            <a href='/myfirstproject/editProfile.php?$key' class='btn1 btn-primary'>Edit</a>
                            <a href= '/myfirstproject/delete.php?$row[P_Id]' class='btn1 btn-primary'> Delet </a>

                                   
                            </td>
        
                    </tr>
                    <br>
                
                        
                        ";

                }
                ?>
                </tbody>
        </table>
       
        </div>
        


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