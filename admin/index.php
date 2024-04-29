<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: ../login.php');
        exit();
    } else {
        if($_SESSION['rank']!="admin") {
            echo "You may not view this page";
            header("refresh:3;url=../index.php");
            exit();    
        }
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="/seproject/fe/css/index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once('../fe/core/nav.php'); ?>
        <div class="bar">Waitlist Management</div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">User ID</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Telephone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                    include '../be/dbconnect.php';

                    $sql = "Select * from waitlist"; 
                    $result = mysqli_query($conn, $sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['id'].'</th>
                            <td>'.$row['fname'].'</td>
                            <td>'.$row['lname'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['dob'].'</td>
                            <td>'.$row['tel'].'</td>
                            <td>
                                <a href="../be/approve.php?id='.$row['id'].'" class="btn btn-success btn-sm">Approve</a>
                                <a href="../be/reject.php?id='.$row['id'].'" class="btn btn-danger btn-sm">Reject</a>
                            </td>
                        </tr>
                        ';
                    }
                ?>

            </tbody>
        </table>

        <div class="bar">User Management</div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">User ID</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Telephone</th>
                <th scope="col">Balance</th>
                <th scope="col">Group</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                    include '../be/dbconnect.php';

                    $sql = "Select * from users"; 
                    $result = mysqli_query($conn, $sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['id'].'</th>
                            <td>'.$row['fname'].'</td>
                            <td>'.$row['lname'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['dob'].'</td>
                            <td>'.$row['tel'].'</td>
                            <td>'.$row['balance'].'</td>
                            <td>'.$row['rank'].'</td>
                        </tr>
                        ';
                    }
                ?>

            </tbody>
        </table>
    </body>
</html>