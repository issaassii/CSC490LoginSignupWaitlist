<?php 
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        include 'dbconnect.php';    
        $email = $_POST['loginemail'];
        $password = sha1($_POST['loginpassword']);
            
        $sql = "Select * from users where email='$email' AND password='$password'"; 
        $result = mysqli_query($conn, $sql); 
        $resultnum = mysqli_num_rows($result);
        if($resultnum==1) { 
            $_SESSION['email'] = $email;
            $_SESSION['rank'] = $result->fetch_assoc()['rank'];
            echo "Successful Login!";

        } else {
            echo "Incorrect Details!";
        }
        echo "<br>Redirecting you in 3 seconds";
        header("refresh:3;url=../index.php");
    }
?> 