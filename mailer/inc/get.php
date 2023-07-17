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

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<section>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top bg-white">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Chaspot Intl</a></h1>
            <!-- Uncomment to use an image logo -->
            <!--<a href="index.html" class="logo me-auto"><img src="assets/img/Mindreps/brain-hand-human-brain-research-neural-network_127544-842.webp" alt="Mindreps" WIDTH="100PX" HEIGHT="400px" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0 ">

                <ul>
                    <li><a class="active text-success" href="index.html">Home</a></li>
                    <li><a class="text-black" href="about.html">About</a></li>

                    <li class="dropdown"><a class="text-black" href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Research and Evaluation</a></li>
                            <li><a href="#">Strategic Business Development</a></li>
                            <li><a href="#">Data management</a></li>
                            <li><a href="#">Advocacy and Networking </a></li>
                        </ul>
                    </li>

                    <li><a class="text-black" href="talk.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">


<!--        <div class="-mt-60" data-aos="fade-up">-->
<!--            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>-->
<!--            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8104974850953!2d36.82637532445575!3d-1.287841199426843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11262da332f5%3A0xa7ea505f9c803a15!2sAfya%20Centre%2C%20Nairobi!5e0!3m2!1ssw!2ske!4v1655106183664!5m2!1ssw!2ske" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
<!--        </div>-->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact mt-5">

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>NAIROBI, KENYA 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>director@chaspotinternational.org</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+254723224830</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-xxl-5">

                        <form action="talk.php" method="post">
                            <div id="centreee" class="section-title moving-letters">
                                <p class="ml1">
                                      <span class="text-wrapper mb-10">
                                      <span class="line line1"></span>
                                      <span class="letters section-title ">SERVICES AND PRODUCTS</span>
                                      <span class="line line2"></span>
                                    </span>
                                </p>

                            </div>


                            <div>
                                <label for="name">Name:</label>
                                <input type="text" value="<?= $inputs['name'] ?? '' ?>" name="name" id="name" placeholder="Full name">
                                <small><?= $errors['name'] ?? '' ?></small>
                            </div>

                            <div class="mt-3">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Email address">
                                <small><?= $errors['email'] ?? '' ?></small>
                            </div>


                            <div class="mt-3">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
                                <small><?= $errors['message'] ?? '' ?></small>
                            </div>

                            <label style="display: none;" for="nickname" aria-hidden="true" class="user-cannot-see"> Nickname
                                <input  type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off">
                            </label>

                            <button class="mt-3" type="submit">Send Message</button>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3><strong>CHASPOT INTERNATIONAL</strong></h3>
                        <p>
                            8966-00300<br>
                            NAIROBI, KENYA<br>
                            <br>
                            <strong>Phone:</strong>+254720119099<br>
                            <strong>Email:</strong>director@chaspotinternational.org<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="talk.php">Get in Touch</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Research and Evaluation</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Strategic Business Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Data Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Advocacy and Networking</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright 2022<strong><span> CHASPOT INTERNATIONAL</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                    <!--Designed by <a href="https://bootstrapmade.com/">Chaspot International</a>-->
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
</section>
</body>

</html>























