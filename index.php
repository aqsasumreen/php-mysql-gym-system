<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container mx-auto ">
        <main class="min-h-screen">
            <section class="section1">
                <div class="flex">
                    <div class="topLeft flex flexDirectionColumn justifyCenter px-1">
                        <h1 class="my-1 ">The Best Fitness Gym</h1>
                        <p>At FitZone Gym, we offer a range of fitness programs tailored to your specific needs and preferences. From high-intensity interval training (HIIT) and strength training to yoga and spin classes, we have something for everyone.
                             Our experienced instructors will help you stay motivated, push your limits, and achieve your desired results.</p>
                    </div>
                    <div class="topRight flex flexDirectionColumn justifyCenter px-1">
                        <img src="BigSportgym.jpg" alt="">
                    </div>
                </div>
            </section>
            <hr>
            <section class="section2">
                <h1 class="textCenter my-2">Pricing</h1>
                <p class="my-1">Our facilities are designed with your comfort and convenience in mind. Enjoy spacious workout areas, top-notch cardio machines, and a wide selection of free weights. We also offer locker rooms, showers, and towel services for your convenience. And for those who prefer a more personalized experience, we provide one-on-one training sessions to help you reach your goals faster.</p>
                <div class="boxes flex flexDirectionRow textCenter">
                    <div class="box">
                        <h2>Free</h2>
                        <ul>
                            <li>$0/mo</li>
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="btn">SignUp For Free</button></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h2>Pro</h2>
                        <ul>
                            <li>$15/mo</li>
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                            <li><button class="btn">Get Started</button></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h2>Enterprise</h2>
                        <ul>
                            <li>$29/mo</li>
                            <li>30 users included</li>
                            <li>15 GB of storage</li>
                            <li>Phone and email support</li>
                            <li>Help center access</li>
                            <li><button class="btn">Contact Us</button></li>
                        </ul>
                    </div>

                </div>
            </section>
            <hr>
        </main>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>