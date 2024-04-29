<?php
    session_start();
    if(!isset($_SESSION['email'])){
        echo "You may not view this page";
        header("refresh:3;url=../index.php");
        exit();
    } else {
        if($_SESSION['rank']!="admin") {
            echo "You may not view this page";
            header("refresh:3;url=../index.php");
            exit();    
        }
    }

    include 'dbconnect.php';
    $id = $_GET["id"];

    $sql = "select * from waitlist where id='$id'";
    $result = mysqli_query($conn, $sql);
    $resultnum = mysqli_num_rows($result);
    if ($resultnum==1) {
        $sql = "delete from waitlist where id='$id'"; 
        $result = mysqli_query($conn, $sql); 
        if($result) {
            echo "Success!";
            header("refresh:3;url=../index.php");
        } else {
            echo "Error";
            header("refresh:3;url=../index.php");
        }
    } else {
        echo "User does not exist";
        header("refresh:3;url=../index.php");
    }
    echo "<br>Redirecting you in 3 seconds";

?>