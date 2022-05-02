<?php
include('./includes/functions.php');
$ngos = selectAll('ngo');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Healthcare at your convinience</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

    <!-- boxed bg -->
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="color/default.css" rel="stylesheet">

</head>

<body>


    <div id="wrapper">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="top-area">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-md-6">
                            <div class="text-right">
                                <label for="newsletter">Need help purchasing a health plan ?</label>&nbsp;
                                <a href="#appointment-modal" class="btn btn-danger btn-md" data-toggle="modal" data-target="#appointment-modal">Book an appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container navigation">

                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="img/expressLogo.png" alt="" width="150" height="50" />
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="index.php#ourservice">Our Services</a></li>
                        <li><a href="#">OUR NGO</a></li>
                        <li><a href="healthtips.php">BLOG</a></li>
                        <li class="login-navbar"><a class="nav-link" href="./login.php">LOGIN&nbsp;<i class="fa fa-lock"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- main body code of webpage -->
        <section id="intro" class="intro">
            <div class="intro-content">
                <div class="container">
                    <!-- Login Modal Form goes here -->

                    <!-- Login Modal Form goes here -->

                    <!--Appointment Modal goes here -->
                    <div class="modal fade" id="appointment-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="panel panel-skin">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="fa fa-pencil-square-o"></span> Book an appoinment <small class="free-appointment text-info">(It's free!)</small>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <div id="sendmessage">
                                        Your message has been sent. Thank you!
                                    </div>
                                    <div id="errormessage"></div>

                                    <form action="process.php" method="post" role="form" class="contactForm lead">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" name="first_name" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last_name" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" name="email" id="email" class="form-control input-md" data-rule="email" data-msg="Please enter a valid email" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Phone number</label>
                                                    <input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" data-msg="The phone number is required" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-skin btn-block btn-lg">
                                            SUBMIT
                                        </button>

                                        <p class="lead-footer">
                                            *we will contact you shortly after your booking*
                                        </p>
                                        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">
                                            close
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Appointment Modal goes here -->

                    <div class="row">
                        <div class="col-md-12">

                            <div class="jumbotron wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">

                                <h2 class="h-ultra text-center">OUR NGO</h2>
                                <hr id="activities">
                                <p class="ngo text-center">ExpressMed foundation cares about the people, the community, and the environment. We do regular health outreach, health walks, medical screening, diabetic & hypertensive clinic, health education and donations to the needy. <a class="text-danger" href="donation.php">Join us!</a> Together, we make the world a safer place for everyone.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="callaction" class="home-section paddingtop-40">
            <div class="container">
                <div class="row paddingbot-20">
                     <?php foreach ($ngos as $ngo) : ?>
                                <div class="col-md-3 text-left">
                                    <div class="callaction">
                                        <h5 class="text-info text-center"><?php echo $ngo['title'] ?></h5>
                                        <a href="#"> <img src="<?php echo './img/' . $ngo['image'] ?>" alt="ExpressMed&GlobalShapers" class="img-responsive"></a>
                                        <p class="margintop-10">
                                            <?php echo substr($ngo['content'], 0, 150) ?><span>...<small class="text-danger">read more</small></span>
                                        </p>
                                    </div>
                                </div>
                      <?php endforeach ?>
                           </div>
                  </div>
        </section>

        <footer>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Quick Links</h5>
                                <hr class="cta">
                                <div class="social-update">
                                    <a href="index.php"><strong>HOME</strong></a><br>
                                    <a href="about.html"><strong>ABOUT US</strong></a><br>
                                    <a href="community.php"><strong>OUR NGO</strong></a><br>
                                    <a href="healthtips.php"><strong>BLOG</strong></a><br>
                                    <a href="faq.html"><strong>FAQ</strong></a><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>CONNECT WITH US</h5>
                                <hr class="cta">
                                <ul>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                        </span> (+233) 542-053-335 / 202-660-061
                                    </li>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                        </span> expressmedgh@gmail.com
                                    </li><br />
                                    <li>
                                        <h5>Get Our Newsletter</h5>
                                        <hr class="cta">
                                        <form class="form-inline">
                                            <input type="text" class="form-control form-control-sm" placeholder="Your email" arial-label="Your email" aria-describedby="basic-addon2">
                                            <button class="btn btn-sm btn-info" type="submit">Subscribe</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Our location</h5>
                                <hr class="cta">
                                <p>B712/15 Adamu Lane Street, Russia - Accra</p>
                            </div>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Follow Us</h5>
                                <hr class="cta">
                                <ul class="company-social">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-google"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-youtube-square"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="text-left">
                                    <p>&copy;Copyright - ExpressMedGhana. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="text-right">
                                    <div class="credits">
                                        <!--
                      All the links in the footer should remain intact. 
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                    -->
                                        Designed by <a href="https://webtechgh.com/">WEBTECH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>