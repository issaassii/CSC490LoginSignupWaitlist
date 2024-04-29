<?php 
    session_start();
    if(isset($_SESSION['email'])){
        header('Location: index.php');
        exit();
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="fe/css/login.css">
    </head>
    <body>
        <div class="main">
            <div class="card" id="login" style="min-width:30%;padding:15px 15px 0 15px;">
                <h2 style="text-align:center;">Sign Up</h2>
                <form action="be/su.php" method="POST">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="signupfname" pattern="^[A-Za-z]{1,15}$" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="signuplname" pattern="^[A-Za-z]{1,15}$" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" name="signupemail" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="signuppassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label>Date of Birth</label>
                      <input type="date" name="signupdate" class="form-control" placeholder="Date of Birth" required>
                    </div>
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="tel" name="signuptel" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}" class="form-control" placeholder="12-345-678" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin:10px 0 0 0;">Submit Application</button>
                    <a href="login.php" class="btn btn-link">Log In Instead</a>
                </form>
            </div>
        </div>    
    </body>
</html>
