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
    </style>
</head>

<body>
<?php include 'header.php'; ?>
<form action="/21/handlecontact.php" method="post">
            <div class="max-width-1 margin-auto">
                <div class="contact font3">
                    <h2>Feel Free To Contact Us</h2>
                    <div class="contactForm">
                        <div class="formBox">
                            <input type="text" placeholder="Enter Your Name" name="name">
                        </div>
                        <div class="formBox">
                            <input type="text" placeholder="Enter Your Phone number" name="phone">
                        </div>
                        <div class="formBox">
                            <input type="text" placeholder="Enter Your Email id" name="email">
                        </div>
                        <div class="formBox">
                            <input type="text" placeholder="Enter Your Addrees" name="address">
                        </div>
                        <div class="formBox">
                        <input type="text"  placeholder="How Mayb I Help You?" name="description">
                        </div>
                        <div class="formBox">
                            <button class="btn" name="submit" value="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <<div class="container mx-auto ">
            <hr>
        <footer class="foot">
            Copyright &copy;FitnessFreak.com | All rights reserved
        </footer>
</div>
</div>
</body>

</html>