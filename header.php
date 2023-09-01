<style>
            #dismissibleDiv {
                    position: relative;
                    background-color: #f9f9f9;
                    padding: 20px;
                    border: 1px solid #ddd;
        }

        #dismissButton {
                    position: absolute;
                    top: 5px;
                    right: 5px;
                    background-color: #f44336;
                    color: #fff;
                    border: none;
                    padding: 5px 10px;
                    cursor: pointer;
        }

        .text{
            background-color: #f9f9f9;
            color : black;
            margin : 5px 0px;
        }

</style>
<?php
    session_start();
    echo '
    <div class="container mx-auto ">
    <header class="header">
        <nav class="flex justifyBetween">
            <div class="textBlue flex itemCenter logo">Fitness Freak</div>
            <ul class="navbar flex itemCenter">
                <a href="index.php"><li><button class="btn">Home</button></a>
                <a href="about.php"><li><button class="btn">About</button></a>
                <a href="contactUs.php"><li><button class="btn">Contact Us</button></li></a>
        ';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                echo'
                    <p class="text">'. $_SESSION['useremail'].'</p>
                    <a href="logout.php"><li><button class="btn">logout</button></li></a>
                ';
        }
        else{
            echo'
                    <a href="signup.php"><li><button class="btn">Sign Up</button></li></a>
                    <a href="login.php"><li><button class="btn">Login</button></li></a>
            ';
        }
        echo'
        </ul>
        </nav>
    </header>
    <hr>
</div> 
        ';
        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
            echo'
            <div class="container mx-auto ">
            <div id="dismissibleDiv">
            <p>You are sussessfully signedup, You can login now !</p>
            <button id="dismissButton">Dismiss</button>
            </div>
            </div>';
            }
        elseif(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false"){
            echo'
            <div class="container mx-auto ">
            <div id="dismissibleDiv">
            <p>User With this email already exit !</p>
            <button id="dismissButton">Dismiss</button>
            </div>
            </div>';
            }


?>
<script>
            document.getElementById('dismissButton').addEventListener('click', function() {
            var dismissibleDiv = document.getElementById('dismissibleDiv');
            dismissibleDiv.style.display = 'none';
});

</script>