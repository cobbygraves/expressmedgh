<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="X-ua-compatible" content="ie=edge" />

    <title>Donation Healthcare</title>

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

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="background:#FAFAFA">
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
                        <li><a href="index.html#ourservice">Our Services</a></li>
                        <li><a href="community.php">OUR NGO</a></li>
                        <li><a href="healthtips.php">Health Blog</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- main body code of webpage -->
        <section>
            <div class="intro-content register-content">
                <div class="container">
                    <!-- Login Modal Form goes here -->
                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <h1>Login to Your Account</h1>
                                <br />
                                <form>
                                    <input type="text" name="user" placeholder="Username" />
                                    <input type="password" name="pass" placeholder="Password" />
                                    <input type="submit" name="login" class="login loginmodal-submit" value="Login" />
                                </form>
                                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">
                                    close
                                </button>
                            </div>
                        </div>
                    </div>
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
                </div>
            </div>
        </section>

        <section id="callaction" class="home-section">
            <div class="container">
                <!--register body-->

                <!--register body-->
            </div>
        </section>
    </div>

    <div class="donation container">
        <div class="row">
            <div class="col-md-6">

                <img src="./img/momo.png" style="width: 90px; height: 50px">
                <p>0542053335</p>
            </div>
            <div class="col-md-6">
                <div class="ecobank">
                    <img src="./img/ecobank.png">
                    ExpressMed Limited.
                    (0640024645132201),
                    Kwame Nkrumah Avenue
                </div>
            </div>
        </div>
        <h3 class="text-primary margintop-30"> Ketoa Bia N'sua &nbsp;<small>(<b>every help count</b>)</small> </h3>
        <form action="donate.php" method="post" role="form" class="contactForm lead">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                        <div class="validation"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control input-md" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" data-msg="The phone number is required" />
                        <div class="validation"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="message">Message</label><br>
                        <textarea style="width: 100%; padding: 10px" name="message" rows="5"></textarea>
                        <div class="validation"></div>
                    </div>
                </div>
            </div>

            <button type="submit" name="donate" class="btn btn-skin btn-block btn-lg">
                DONATE
            </button>
        </form>
    </div>
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
