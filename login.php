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
                <h2 style="text-align:center;">Log In</h2>
                <form action="be/li.php" method="POST">
                        <div class="form-group">
                      <label>Email</label>
                      <input type="email" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" name="loginemail" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="loginpassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin:10px 0 0 0;">Submit</button>
                    <a href="signup.php" class="btn btn-link">Sign Up Instead</a>
                </form>
            </div>
        </div>    
    </body>
</html>
