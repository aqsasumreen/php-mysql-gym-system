<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnection.php';
    $email = $_POST['signupemail'];
    $password = $_POST['signuppassword'];
    $cpassword = $_POST['signupcpassword'];
// check whether user with this email already exists or not
    $existSql = "select * from `users` where email = '$email'";
    $result = mysqli_query($conn,$existSql);
    $totalRows = mysqli_num_rows($result);
    if($totalRows>0){
        echo "User With this email alrady Exists , So You Cannot SignUp with This Email !";
    } 
    else{
        if($password ==  $cpassword){
            $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("Location: /21/index.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError = "Password do not Match !";
        }
    }
    header("Location: /21/index.php?signupsuccess=false&error=$showError");
}
?>