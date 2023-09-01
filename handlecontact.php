
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'dbconnection.php';
        $name = $_POST['name'];
        $phone  = $_POST['phone'];
        $email = $_POST['email'] ;
        $address  = $_POST['address'];
        $des = $_POST['description'];
        
        $sql = "INSERT INTO `contact` (`name`, `phone`, `email`, `address`, `description`) VALUES ('$name', '$phone', '$email', '$address', '$des')";
        $result = mysqli_query($conn,$sql);
        header("Location: /21/index.php");
          echo "Thanks for contacting us";
    }
?>