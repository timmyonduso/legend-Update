<?php if (isset($message)) : ?>
    <br><br><br><br>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php endif ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact the team</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/Mindreps/R.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,900' rel='stylesheet' type='text/css'>


    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link href="css/contact.css" rel="stylesheet">

</head>

<body id="contact">

<!-- ======= Header ======= -->

<header class="bg-dark" >
    <div class="utility-nav d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="small">
                        <i class="bx bx-envelope"></i>
                        <a href="mailto:director@chaspotinternational.org">director@chaspotinternational.org</a>

                        <i class="bx bx-phone" style="margin-left: 30px;"></i>
                        <a href="tel:+254723224830">+254723224830</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-transparent main-menu" style="box-shadow:none">
        <div class="container">

            <a class="navbar-brand" href="index.html">
                <p>Logo</p>
                <!--        <img src="img/Anlogo.jpeg" alt="" style="display: flex; width: 100px; height: 100px;">-->
            </a>

            <div class="collapse navbar-collapse">
                <form class="form-inline my-2 my-lg-0 mx-auto">
                    <input type="text" name="text" class="input" placeholder="Search keywords">
                    <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="bx bx-search"></i></button>
                </form>

                <ul class="navbar-nav">
                    <li class="nav-item ml-md-3">
                        <div class="w3-container">

                            <button class="btn btn-primary"><i class="bx bxs-user-circle mr-1"></i>Get in touch</button>

                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>

    <nav class="navbar navbar-expand-md navbar-light bg-transparent sub-menu">
        <div class="container">
            <div class="navbar-links">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="talk.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="search-bar d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="form-inline mb-3 mx-auto">
                        <input class="form-control" type="search" placeholder="Search for products..." aria-label="Search">
                        <button class="btn btn-success" type="submit"><i class="bx bx-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>

<!-- End Header -->


    <main id="main">
                <!-- ======= Contact Section ======= -->
        <div class="contactUs">
            <div class="title">
                <h2>Send us a message</h2>
            </div>
            <div class="box">
                <div class="contact form">
                    <h3>Write your message</h3>
                    <form action="talk.php" method="post">
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <label for="name">
                                        <input type="text" value="<?= $inputs['name']?? ''?>" name="name" id="name" placeholder="Lahm">
                                        <small><?= $errors['name'] ?? '' ?></small>
                                    </label>
                                </div>
                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <label>
                                        <input type="text" placeholder="Balolo" value="<?= $inputs['name']?? ''?>">
                                        <small><?= $errors['name'] ?? '' ?></small>
                                    </label>
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email</span>
                                    <label>
                                        <input type="text" placeholder="lahmbalolo@gmail.com" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>">
                                        <small><?= $errors['email'] ?? '' ?></small>
                                    </label>
                                </div>

                            </div>

                            <div class="row100" >
                                <div class="inputBox" >
                                    <span>Message</span>
                                    <label for="message"></label>
                                    <textarea id="message" name="message" style="width: 100%" placeholder="Write your message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
                                    <small><?= $errors['message'] ?? '' ?></small>
                                </div>
                            </div>

                            <label style="display: none;" for="nickname" aria-hidden="true" class="user-cannot-see"> Nickname
                                <input  type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off">
                            </label>

                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" value="Send">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <!--            Info box-->
                <div class="contact info">
                    <h3>Contact information</h3>
                    <div class="infoBox">
                        <div>
                            <span><ion-icon name="location"></ion-icon></span>
                            <p>Afya Center, Naitobi <br>Kenya</p>
                        </div>
                        <div>
                            <span><ion-icon name="mail"></ion-icon></span>
                            <a href="mailto:director@chaspotinternational.org">director@chaspotinternational.org</a>
                        </div>
                        <div>
                            <span><ion-icon name="call"></ion-icon></span>
                            <a href="tel:+254723224830">+254723224830</a>
                        </div>
                        <!--                    Social Media links-->
                        <ul class="sci">
                            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        </ul>
                    </div>
                </div>

                <!--            Map-->
                <div class="contact map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8105058792353!2d36.825890950018845!3d-1.2878358359857325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11262da332f5%3A0xa7ea505f9c803a15!2sAfya%20Centre%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1680289563482!5m2!1sen!2ske" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- End Contact Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
    <script src="/js/navbar.js"></script>
</body>

</html>























