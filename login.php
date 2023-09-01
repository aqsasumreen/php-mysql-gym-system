<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBlog - Heaven for bloggers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utilities.css">
    <style>
        body{
                 min-height: 100vh;
        }
        .foot{
                    height: 20px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    color: black;
                    padding: 23px;
                    text-align: center;
                    position: sticky;
                    top : 100%;
        }
        label {
        display: inline-block;
        width: 150px;
        text-align: right;
      }
      .button{
        margin: 15px 400px;
      }
    </style>
</head>

<body>
<?php include 'header.php'; ?>
<div class="max-width-1 margin-auto">
            <div class="contact font3">
                <h2>Feel Free To Login</h2>
                <div class="contactForm">
                    <form action="/21/handlelogin.php" method="post">
                    <div class="formBox" id="email">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="signupemail" name="loginemail" aria-describedby="emailHelp" placeholder="Enter Your Email">
                    </div>
                    <div class="formBox" id="pass">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signuppassword" name="loginpassword"
                        placeholder="Enter Your Password">
                    </div>
                    <div class="formBox button">
                        <button class="btn">Login</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <<div class="container mx-auto ">
            <hr>
        </div>
    </div>
</body>

</html>
