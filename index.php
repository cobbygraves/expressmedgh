<?php 
  include('./includes/functions.php');
   $error = array();
   $isSubscribe = false;
   if(isset($_POST['subscribe'])){
      // global $conn;
      if(empty($_POST['email'])){
        array_push($error, 'Please provide a valid email to subscribe');
      }

      $emailExist = selectOne('subscribers', ['email' => $_POST['email']]);
      if (isset($emailExist)) {
          array_push($error, 'Email already exist');
      }

      if(count($error) === 0){
        $isSubscribe = true;
        unset($_POST['subscribe']);
       $subcribeID = create('subscribers', $_POST);
      }
   }
   
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="X-ua-compatible" content="ie=edge" />

    <title>Healthcare at your convinience</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css" />
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <!-- boxed bg -->
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="color/default.css" rel="stylesheet" />
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="top-area">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-md-6">
                            <div class="text-right">
                                <form class="form-inline" action="index.php" method="post">
                                    <label for="newsletter">Get our newsletter</label>&nbsp;
                                    <input type="text" class="form-control form-control-sm" placeholder="Your Email" arial-label="Your email" aria-describedby="basic-addon2" name="email"/>
                                    <button class="btn btn-sm btn-danger" type="submit" name="subscribe">
                                        Subscribe
                                    </button>
                                    <?php if($isSubscribe): ?><i class="fa fa-check text-white px-1"></i><?php endif ?>
                                </form>
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
                        <li class="active"><a href="#intro">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#ourservice">Our Services</a></li>
                        <li><a href="community.php">OUR NGO</a></li>
                        <li><a href="healthtips.php">BLOG</a></li>
                        <li class="login-navbar"><a class="nav-link" href="./login.php">LOGIN&nbsp;<i class="fa fa-lock"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Section: intro -->
        <section id="intro" class="intro home-section">
            <div class="intro-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                <h2 class="h-ultra">
                                    ExpressMed<small class="h-light color">...Healthcare at your convenience</small>
                                </h2>
                            </div>

                            <blockquote class="wow fadeInRight jumbotron well well-trans" data-wow-delay="0.1s">
                                <h4 class="h-light text-justify">
                                    <small>Looking for a healthcare provider that improves
                                        <strong>patient experience</strong>, transforms healthcare
                                        delivery to <strong>increase value</strong>, expands
                                        <strong>precision services</strong> and offers quality
                                        healthcare through <strong>digitalization</strong>,
                                        <strong>ExpressMed</strong> has you covered.</small>
                                    <hr class="cta" />
                                    <a href="#appointment-modal" class="btn btn-skin btn-lg" data-toggle="modal" data-target="#appointment-modal">BOOK AN APPOINTMENT</a>
                                </h4>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrapper">
                                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <img src="img/dummy/img-2.png" class="img-responsive" alt="" />
                                </div>
                            </div>
                        </div>
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

                        <!--Signup Modal Form goes here -->

                        <div class="modal fade" id="signUp-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="loginmodal-container">
                                    <h1>SignUp to create an account</h1>
                                    <br />
                                    <form>
                                        <input type="text" name="user" placeholder="Username" />
                                        <input type="text" name="pass" placeholder="Password" />
                                        <input type="text" name="confirmpass" placeholder="Confirm Password" />
                                        <input type="submit" name="signup" class="login loginmodal-submit" value="Create Account" />
                                    </form>
                                    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">
                                        close
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--Signup Modal Form goes here -->
                    </div>
                </div>
            </div>
        </section>

        <!-- /Section: intro -->

        <!-- Section: boxes -->
        <section id="boxes" class="home-section">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="h-bold">OUR DIGITAL PLATFORMS</h2>
                </div>
                <div class="divider-short"></div>
                <br />

                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <i class="fa fa-mobile fa-3x circled bg-skin"></i>
                                <h4 class="h-bold">App</h4>
                                <p class="text-justify values">
                                    Take control of your own health at the
                                    <a href="#" class="faq"><strong>click</strong></a> of a button. Get 24/7 access to our proffessional doctors and specialists. Stay abreast with the latest health info, get your lab reports and electronic records on
                                    the go, all at your convenience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <i class="fa fa-headphones fa-3x circled bg-skin"></i>
                                <h4 class="h-bold">Wearables</h4>
                                <p class="text-justify values">
                                    With a simple wearable you can link it up with your phone to track your activity, sleep, heart rate, breathing patterns and stress levels. Get one of our wearables to help you monitor your health.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <i class="fa fa-phone fa-3x circled bg-skin"></i>
                                <h4 class="h-bold">Shortcode</h4>
                                <p class="text-justify values">
                                    Use our 'BOA ME' (help me) shortcode for doctor chats, health advice and more. Just dial
                                    <a href="#" class="faq">*714*33*34#</a> and our professional doctors will attend to you within seconds.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: boxes -->

        <section id="callaction" class="home-section paddingtop-40">
            <div class="container">
            <div class="row">
            <div class="section-heading text-center">
                        <h2 class="h-bold">#MyCOVIDExperience</h2>
                    </div>
                    <div class="divider-short"></div>
                    <br />
                    <div class="col-md-12">
                        <div class="callaction">
                            <div class="row">
                                <div class="col-md-12">
                                <!-- <h3 class="text-center">My COVID-19 EXPERIENCE</h3> -->
                                <iframe src="https://www.youtube.com/embed/9pJEncv1lsI?autoplay=1" width="100%" height="425"  frameborder="0"></iframe>
                                </div>
                                <div class="col-md-12">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="cta-text">
                                            <h6 class="text-center text-justify">
                                                The COVID-19 pandemic has affected many people around the world. As part of our awareness campaign, we are encouraging people who got infected with COVID-19 to share their experience.
                                                We entreat everyone to follow the safety protocols: 

                                            </h6>
                                            <p style="text-align: left"><i class="fa fa-check"></i> wear your face mask</p>
                                            <p style="text-align: left"><i class="fa fa-check"></i> wash your hands frequently with soap and running water</p>
                                            <p style="text-align: left"><i class="fa fa-check"></i> use alcohol-based hand sanitizer</p>
                                            <p style="text-align: left"><i class="fa fa-check"></i> maintain social distance</p>
                                            <p style="text-align: left"><i class="fa fa-check"></i> avoid crowded places</p>
                                            <p style="text-align: left"><i class="fa fa-check"></i> boost your immune system</p>
                                            <h6 class="text-center">Contact us if you want to share your COVID experience #StaySafe</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="cta-text">
                                            <h3>Need help purchasing a health plan ?</h3>
                                            <h6>
                                                If you need help with any of our services, we are here to help you in the comfort of your home.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                        <div class="cta-btn">
                                            <a href="#appointment-modal" class="btn btn-skin btn-lg" data-toggle="modal" data-target="#appointment-modal">BOOK AN APPOINTMENT</a>
                                            <h2 id="ourservice" class="h-bold"></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: services -->
        <section id="service" class="home-section nopadding paddingtop-60">
            <div class="container">
                <div class="row">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">OUR SERVICES</h2>
                    </div>
                    <div class="divider-short"></div>
                    <br />
                    <div class="col-md-6">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="service-box ">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#"> Doctor Consultation </a></h5>

                                    <ul class="service-desc">
                                        <li>Medical Check-Ups</li>
                                        <li>Chronic Illness</li>
                                        <li>Acute Illness</li>
                                    </ul>
                                    <img src="img/doctor%20consultation.jpg">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#">Home Visits</a></h5>
                                    <ul class="service-desc">
                                        <li>Doctor Consultation</li>
                                        <li>Family Health Coverage</li>
                                        <li>Monthly Reviews</li>

                                    </ul>
                                    <img src="img/homeVisit.JPG">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#">Medical Examination</a></h5>
                                    <ul class="service-desc">
                                        <li>Physical Examination</li>
                                        <li>Laboratory Analysis</li>
                                        <li>Medical Report</li>

                                    </ul>
                                    <img src="img/laboratory%20services.JPG">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#">Pediatrics</a></h5>
                                    <ul class="service-desc">
                                        <li>Disease Prevention</li>
                                        <li>Treatments</li>
                                        <li>Well-Child Care</li>

                                    </ul>
                                    <img src="img/pediatrics.JPG" style="height: 120px;">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#">Nursing Services</a></h5>
                                    <ul class="service-desc">
                                        <li>Post-Surgical Care</li>
                                        <li>Injection</li>
                                        <li>Wound Care</li>
                                        <li>Vaccination</li>
                                    </ul>
                                    <img src="img/nursing.JPG" style="height: 120px;">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#">Telehealth</a></h5>
                                    <ul class="service-desc">
                                        <li>Video Conferencing</li>
                                        <li>Remote Monitoring & Control of Vitals</li>
                                        <li>Medical Education</li>

                                    </ul>
                                    <img src="img/telehealth.JPG" style="height: 120px;">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#">Corporate Wellness</a></h5>
                                    <ul class="service-desc">
                                        <li>Fitness</li>
                                        <li>Lifestyle Management</li>
                                        <li>Prevention</li>

                                    </ul>
                                    <img src="img/coporate.JPG">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#">Nutrition & Dietetics</a></h5>
                                    <ul class="service-desc">
                                        <li>Weight Loss</li>
                                        <li>Dietary Management</li>
                                        <li>Nutrition Therapy</li>

                                    </ul>
                                    <img src="img/dieticien.JPG">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="service-box">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#">Physiotherapy</a></h5>
                                    <ul class="service-desc">
                                        <li>Back Pain</li>
                                        <li>Sport Injuries</li>
                                        <li>Post-Surgical Rehab</li>
                                    </ul>
                                    <img src="img/physiotherapy.JPG">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">

                                <div class="services-content">
                                    <h5 class="text-center"><a class="services-title" href="#">In-Home Trained Attendants</a></h5>
                                    <ul class="service-desc">
                                        <li>Elderly Care</li>
                                        <li>Mother and Baby Care</li>
                                        <li>Post-Operative Support</li>

                                    </ul>
                                    <img src="img/trainned%20attendant.JPG">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: services -->

        <!-- Section: testimonial -->
        <section class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">
            <!--Testimonial Header-->
            <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                    <h2 class="h-bold">OUR TESTIMONIALS</h2>
                </div>
                <div class="divider-short"></div>
                <br />
            </div>
            <!--Testimonial Header-->

            <div id="testimonial" class="carousel-reviews broun-block">
                <div id="ourTestimonial" class="container">
                    <div class="row">
                        <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">Corporate Wellness</a>
                                            <div class="mark">
                                                My rating:
                                                <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                </span>
                                            </div>
                                            <p>
                                                My company had been looking for a healthcare provider that would take our employees through a wellness program. When ExpressMed approached us, we thought of giving it a try. It's been 2 years and our emlployees express their satisfaction with their service.
                                            </p>
                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <!--  <img src="img/testimonials/1.jpg" alt="" class="person img-circle" /> -->
                                            <a title="" href="#">Matthew Gyan</a>
                                            <span> Banker </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">App</a>
                                            <div class="mark">
                                                My rating:
                                                <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span></span>
                                            </div>
                                            <p>
                                                For me it was that simple. With just a click, I was able to request for some labs with the ExpressMed app. The lab technician that came to my house was very professional. Within a few hours I received email of my result and a subsequent telephone call
                                                to interpret results. The convenience is superb.
                                            </p>
                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>

                                        <div class="person-text rel text-light">
                                            <!--  <img src="img/testimonials/2.jpg" alt="" class="person img-circle" /> -->
                                            <a title="" href="#">Lucas Thompson</a>
                                            <span> Lawyer</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">Paediatrics</a>
                                            <div class="mark">
                                                My rating:
                                                <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span></span>
                                            </div>
                                            <p>
                                                My infant daughter is seen here at home by specialists and I couldn't be happier. Their paediatrician explains everything and ask questions to make sure all is well and understood.
                                            </p>
                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <!-- <img src="img/testimonials/3.jpg" alt="" class="person img-circle" /> -->
                                            <a title="" href="#">Akorfa Dabla </a>
                                            <span>HR Manager</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">Diabetic Care</a>
                                            <div class="mark">
                                                My rating:
                                                <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span></span>
                                            </div>
                                            <p>
                                                ExpressMed is quite different from the normal hospital service. The experience I have with their doctor and nurse at home after I subscribed for diabetic management is phenomenal.
                                            </p>
                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <!--  <img src="img/testimonials/4.jpg" alt="" class="person img-circle" /> -->
                                            <a title="" href="#">Anna Quaye </a>
                                            <span>CEO </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">App</a>
                                            <div class="mark">
                                                My rating:
                                                <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span></span>
                                            </div>
                                            <p>
                                                All I do now if I need to see a doctor is to use the app to book an appointment and set my preferred choice of consultation. I have tried video chat and physical consultations once a month and I admit it was a great experience. The staff were professional
                                                and caring.
                                            </p>
                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <!--  <img src="img/testimonials/5.jpg" alt="" class="person img-circle" /> -->
                                            <a title="" href="#">Ella McBrown</a>
                                            <span>Accountant</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">ExpressMed</a>
                                            <div class="mark">
                                                My rating:
                                                <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span></span>
                                            </div>
                                            <p>
                                                I have so much knowledge about my health after signing on to ExpressMed. I feel more in control of my own health now. I understand a lot of issues better now than before.
                                            </p>
                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <!--  <img src="img/testimonials/6.jpg" alt="" class="person img-circle" /> -->
                                            <a title="" href="#">Yvonne Smith </a>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: testimonial -->

        <!-- Section: pricing -->

        <!-- /Section: pricing -->

        <section class="partner home-section paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                            <div class="section-heading">
                                <h2 class="h-bold">PARTNER WITH US</h2>
                                <div class="divider-short"></div>
                                <br /><br />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div>
                            <div><img src="img/hospitals.png" /></div>
                            <br />
                            <h5>Hospitals</h5>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div>
                            <div class="paddingbot-8"><img src="img/diagnostic.png" /></div>
                            <br />
                            <h5>Diagnostic Centres</h5>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div>
                            <div><img src="img/company.png" /></div>
                            <br />
                            <h5>Companies</h5>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div>
                            <div class="paddingbot-8"><img src="img/pharmacy.png" /></div>
                            <br />
                            <h5>Pharmacies</h5>
                        </div>
                    </div>
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
                                <hr class="cta" />
                                <div class="social-update">
                                    <a href="#"><strong>HOME</strong></a><br>
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
                                <hr class="cta" />
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
                                    </li>
                                    <br />
                                    <li>
                                        <h5>Get Our Newsletter</h5>
                                        <hr class="cta" />
                                        <form class="form-inline">
                                            <input type="text" class="form-control form-control-sm" placeholder="Your Email" arial-label="Your email" aria-describedby="basic-addon2" />
                                            <button class="btn btn-sm btn-info" type="submit">
                                                Subscribe
                                            </button>
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
                                <hr class="cta" />
                                <p>B712/15 Adamu Lane Street, Russia - Accra</p>
                            </div>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Follow Us</h5>
                                <hr class="cta" />
                                <ul class="company-social">
                                    <li class="social-facebook">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-twitter">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-google">
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li class="social-vimeo">
                                        <a href="#"><i class="fa fa-youtube-square"></i></a>
                                    </li>
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
                                    <p>
                                        &copy;Copyright - ExpressMedGhana. All rights reserved.
                                    </p>
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
                                        Designed by
                                        <a href="https://webspace360.com/">Webspace360</a>
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
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
