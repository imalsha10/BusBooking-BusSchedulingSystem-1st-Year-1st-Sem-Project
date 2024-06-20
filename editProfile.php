<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit profile</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>


        <div class="container-xl px-4 mt-4">
   
            <nav class="nav nav-borders">
                <a class="nav-link" href="Homepage.html">HOME</a>
                <a class="nav-link" href="busschedule.php">BOOKINGS</a>
                <a class="nav-link" href="aboutus.html">ABOUT US</a>
                <a class="nav-link" href="userprofile.php">USER PROFILE</a>
                <a class="nav-link" href="LOGIN">LOGIN</a>
                <li> <a href="adminlogin.php">ADMIN LOGIN</a></li>

           </nav>
        
            <hr class="mt-0 mb-4">
        
            <div class="row">
                <div class="col-xl-4">
                    
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            
                            <img class="img-account-profile rounded-circle mb-2" src="https://img.freepik.com/premium-vector/people-saving-money_24908-51569.jpg?w=740" alt="profile pic">
                            
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            
                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
        
        
                
                <div class="col-xl-8">
                    
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                        <form method="post" action="newOneUpdate.php">
                     
                                
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Username</label>
                                    <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" name="key" required>
                                </div>
        
                                
                                <div class="row gx-3 mb-3">
                                    
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">First name</label>
                                        <input class="form-control" id="inputFirstName" type="text" name="fName" placeholder="Enter your first name" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Last name</label>
                                        <input class="form-control" id="inputLastName" type="text" name="lName"  placeholder="Enter your last name" required>
                                    </div>
                                </div>
        
        
                                
                                <div class="row gx-3 mb-3 ">
                                    
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">NIC number</label>
                                        <input class="form-control" id="inputPhone" type="tel" name="nicNum"  placeholder="Enter your phone number" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputAddress">Address</label>
                                        <input class="form-control" id="inputAddress" type="text" name="address"  placeholder="Enter your Address" required>
                                    </div>
                                </div>
        
                                
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" id="inputEmailAddress" type="email" name="email"  placeholder="Enter your email address">
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1" for="inputDateOfBirth">Date of Birth</label>
                                    <input class="form-control" id="inputDateOfBirth" type="text" name="bDay"  placeholder="Enter your birth day" >
                                </div>
                                 <div class="mb-3">
                                    <label class="small mb-1" for="inputage">Age</label>
                                    <input class="form-control" id="inputage" type="text" name="age"  placeholder="Enter age">
                                </div>
        
                                
                                <div class="row gx-3 mb-3">
                                    
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPassword"> Password</label>
                                        <input class="form-control" id="inputPassword" type="text" name="Password" name="pWord"  placeholder="Enter your Password" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPassword">Confirm Password</label>
                                        <input class="form-control" id="inputPassword" type="text" name="Password" placeholder="Enter your Password" required>
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary" type="submit" value='insert data'>Submit</button>
                                <button class="btn btn-primary" role="button" href="/myfirstproject/index.php">Cancle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        

    </div>
</body>
</html>