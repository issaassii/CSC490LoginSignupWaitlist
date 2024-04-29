<?php
    session_start();
    if(!isset($_SESSION['email']) | $_SESSION['rank']!="admin"){
        echo "You may not view this page";
        echo "<br>Redirecting you in 3 seconds";
        header("refresh:3;url=../index.php");
        exit();
    }

    include 'dbconnect.php';
    $id = $_GET["id"];

    $sql = "Select * from waitlist where id='$id'";
    $result = mysqli_query($conn, $sql); 
    $resultnum = mysqli_num_rows($result);
    if ($resultnum==1) {
        $row = $result->fetch_assoc();
        $firstname = $row['fname'];
        $lastname = $row['lname'];
        $email = $row['email'];
        $dob = $row['dob'];
        $tel = $row['tel']; 
        $password =  $row['password'];

        $sql = "delete from waitlist where id='$id'"; 
        $result = mysqli_query($conn, $sql); 

        $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `dob`, `tel`, `password`, `balance`) VALUES ('$firstname','$lastname','$email','$dob','$tel','$password','0')"; 
        $result = mysqli_query($conn, $sql); 

        if($result) {
            echo "Success!";
            echo "<br>Redirecting you in 3 seconds";
            header("refresh:3;url=../admin");
        } else {
            echo "Error";
            header("refresh:3;url=../admin");
        }
    } else {
        echo "User does not exist";
        echo "<br>Redirecting you in 3 seconds";
        header("refresh:3;url=../admin");
    }
      
?>