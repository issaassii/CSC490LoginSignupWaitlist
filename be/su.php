<?php 
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        include 'dbconnect.php';    
        $firstname = $_POST['signupfname'];
        $lastname = $_POST['signuplname'];
        $email = $_POST['signupemail'];
        $dob = $_POST['signupdate'];
        $tel = $_POST['signuptel'];
        $password = sha1($_POST['signuppassword']);
        
        $sql = "SELECT * FROM `users` WHERE `email`='$email'";
        $result = mysqli_query($conn, $sql);
        $num1 = mysqli_num_rows($result);
        $sql = "SELECT * FROM `waitlist` WHERE `email`='$email'";
        $result = mysqli_query($conn, $sql);  
        $num2 = mysqli_num_rows($result);
        if($num1!=0) {
            echo "ERROR: Already registered.";
        }
        if($num2!=0) {
            echo "ERROR: Already in waitlist.";
        }
        if($num1 == 0 && $num2 == 0) { 
            $sql = "INSERT INTO `waitlist`(`fname`, `lname`, `email`, `dob`, `tel`, `password`, `balance`) VALUES ('$firstname','$lastname','$email','$dob','$tel','$password','0')"; 
            $result = mysqli_query($conn, $sql); 
            if ($result) { 
                echo "Application sent successfuly!<br>Your application is pending administration review.";
            } else {
                echo "Error";
            }
        }
        echo "<br>Redirecting you in 3 seconds";
        header("refresh:3;url=../index.php");
    }         
?> 