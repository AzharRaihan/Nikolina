<?php
include_once 'config.php'; 
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
 <!--==** Fav-icon **==-->
 <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">
<!-- Fontawesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/other-pages-css/owl-custom-css.css">
<!-- Template Main Css Start -->
<link href="assets/css/base.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<style>

</style>
</head>
<body>
    <!-- Header Section Start -->
    <section class="header">
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="logo">
                <a href="index.php" class="mobile">
                    <img src="assets/img/logo.png" alt="logo-pic" class="img-fluid">
                </a>
                <span class="logo-2">
                    <a href="https://unicornpirates.studio/" target="blank">
                        <img src="assets/img/brand/nikolina.png" alt="">
                    </a>
                    <a class="px-2">
                        <img src="assets/img/brand/bar.png" alt="">
                    </a>
                    <a href="https://fxps.services/" target="blank">
                        <img src="assets/img/brand/nikolina2.png" alt="">
                    </a>
                </span>
            </div>
            <div class="trigger-icon">
                <span class="menu" onclick="openNav()">&#9776;</span>
            </div>
        </nav>
        <div id="sidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="side-menu" href="index.php">Home</a>
            <a class="side-menu" href="speaking.php">Speaking</a> 
            <a class="side-menu" href="podcast.php">Podcast</a> 
            <a class="side-menu" href="courses.php">Courses</a> 
            <a class="side-menu" href="games.php">Games</a>
            <a class="side-menu" href="contact.php">Contact</a>
        </div>
    </section>
    <!-- Header Section End -->

    <!-- Banner Section Start -->
    <div class="owl-carousel owl-theme">
        <div class="item text-center">
            <img src="assets/img/banner/banner-1.png" alt="" class="img-fluid">
        </div>
        <div class="item">
            <img src="assets/img/banner/banner-2.png" alt="" class="img-fluid">
        </div>
        <div class="item">
            <img src="assets/img/banner/banner-4.png" alt="" class="img-fluid">
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Who I Am Section Start -->
    <section class="who">
        <div class="container">
            <div class="common-heading">
                <h1>Who I Am!</h1>
            </div>
            <div class="common-content">
                <p>Public speaker, serial entrepreneur, game developer, and diversity champion. My arena is the tech industry and my passion is games.

                    Hi, I’m Nikolina and welcome to my page! I’m a public speaker, a lecturer, podcast host, diversity champion and professional consultant. My professional journey took me from government job, through travel industry to tech.I have been a serial entrepreneur in the tech space with the mission to empower and give safe space to underrepresented people in tech. If you are looking for practical advice on diversity and inclusion, mobile game development and transformative leadership, I can help you.
                    
                    In my career, I worked on over 20 games. As a consultant, I worked with tech giants like Nokia as well as a wide range of gaming studios and NGO’s.
                </p>
            </div>
            <div class="nikolina-fiinska">
                <img src="assets/img/signiture.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- Who I Am Section End -->

    <!-- Making Magical Section Start -->
    <section class="making-magical">
        <div class="container">
            <div class="row my-sm-1 my-md-3 my-lg-4  py-lg-5 py-sm-3 py-md-4 py-xl-5">
                <div class="col-sm-4 col-md-4">
                    <div class="single-image">
                    <img src="assets/img/portfolio/pf-1.png" class="img-fluid " alt="">
                    </div>
                    <div class="single-image">
                    <img src="assets/img/portfolio/pf-4.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="single-image">
                    <img src="assets/img/portfolio/pf-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="single-image">
                    <img src="assets/img/portfolio/pf-5.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="single-image">
                        <img src="assets/img/portfolio/pf-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="single-image">
                        <img src="assets/img/portfolio/pf-6.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Making Magical Section End -->

    <!-- Listen Section Start -->

    <section class="listen">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="listen-head">
                        <h1>It’s time to talk</h1>
                        <h3>Listen To 
                        The Podcast</h3>
                    </div>
                    <?php
                        if (isset($_POST['s_submit'])) {
                            $subscribe_mail = $_POST['email'];
                            $sql="INSERT INTO subscribe(subscribe_mail) VALUES ('$subscribe_mail')";
                            $connect_data = mysqli_query($conn,$sql);
                            if(isset($connect_data)){
                                echo ('You have successfully subscribed');
                            }
                        }
                    ?>
                    <div class="subscribe">
                        <a href="#" data-toggle="modal" data-target="#subscriber">Subscribe now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Listen Section End -->

    <!-- About Brand Section Start -->
    <section class="about-brand">
        <div class="container">
            <div class="common-heading">
                <h3>COMPANIES I WORKED WITH</h3>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-6 pb-4">
                            <img src="assets/img/about-brand/nokia.png" alt="nokia" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-sm-6 col-6  pb-4">
                            <img src="assets/img/about-brand/rovio.png" alt="rovio" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-sm-6 col-6  pb-4">
                            <img src="assets/img/about-brand/music.png" alt="music" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
            <div class="row pb-sm-3 pb-md-4 pb-lg-5">
                <div class="col-md-6 offset-md-3">
                   <div class="row">
                        <div class="col-md-6 col-sm-6 col-6  pb-4">
                            <img src="assets/img/about-brand/next-games.png" alt="games" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-sm-6 col-6  pb-4">
                            <img src="assets/img/about-brand/women-sponsor.png" alt="games" class="img-fluid">
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Brand Section End -->


    <section class="brands">
      <div class="container">
        <div class="text-center">
          <img src="assets/img/other-page-banner/brands.png" alt="" class="img-fluid">
        </div>
      </div>
    </section>


    <!-- Contact Section Start -->
    <section class="contact">
        <div class="container">
            <div class="secondary pb-sm-4 pb-md-5 mb-4 mobile-mb-20">
                <a href="#">
                    I’m honoured to be nominated for Everywoman in Tech International Inspiration Award! 
                </a>
            </div>
            <div class="sponsor text-center">
                <img src="assets/img/sponsor-2.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer class="footer">
        <div class="copyright">
            Copyright &copy; Nikolina Finska 2021. All rights reserved
        </div>
        <div class="social-media">
            <a href="https://twitter.com/UnicornPirates_">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://fi.linkedin.com/in/nikolinazidar">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <div class="develop-by">
            Design And Developed By <a href="http://www.womenindigital.net/"> <strong>Women In Digital</strong></a> | <a href="http://luminadev.com/" target="_blank"><strong>Lumina Dev</strong></a>
        </div>
    </footer>
    <!-- Footer Section End -->


    <!-- Lets Talk Modal -->
    <div class="modal fade" id="subscriber" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form  method="POST">
                    <div class="modal-body">
                        <div class="form-group pt-2">
                            <label for="from-email" class="pb-1">Email</label>
                            <input type="email" class="form-control" id="from-email" placeholder="example@gmail.com" name="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Submit" class="btn btn-info btn-sm text-light" name="s_submit">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Lets Talk Modal -->

 <!-- Vendor JS Files -->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/counterup/counterup.min.js"></script>
 <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
 <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/venobox/venobox.min.js"></script>
 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>
 <script src="assets/js/main2.js"></script>
  
</body>
</html> 

