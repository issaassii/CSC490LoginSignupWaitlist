<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        echo "You are not logged in.<br>";
        echo "Redirecting you in 3 seconds";
        header("refresh:3;url=login.php" );
        exit();
    }
    setcookie(session_name(), '', 100);
    session_unset();
    session_destroy();
    $_SESSION = array();
    echo "Successfully logged out<br>Redirecting you in 3 seconds";
    header("refresh:3;url=login.php" );
    exit();
?>

