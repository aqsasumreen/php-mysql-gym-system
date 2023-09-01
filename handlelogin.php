<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnection.php';
    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];
    $fazool = "You are Logged In !"; 
    $sql = "select * from users where email = '$email'";
    $result = mysqli_query($conn,$sql);
    $totalRows = mysqli_num_rows($result);
    if($totalRows == 1){
        $row = mysqli_fetch_assoc($result);
            if($password == $row['password']){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['useremail'] = $fazool;
                echo "You are Logged in ".$email;
            }
          header("Location: /21/index.php");  
    }
}
?>