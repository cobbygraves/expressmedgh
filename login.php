<?php include('./includes/loginUser.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="X-ua-compatible" content="ie=edge" />

    <title>Login Healthcare</title>

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
                  <label for="newsletter"
                    >Need help purchasing a health plan ?</label
                  >&nbsp
                  <a
                    href="#appointment-modal"
                    class="btn btn-danger btn-md"
                    data-toggle="modal"
                    data-target="#appointment-modal"
                    >Book an appointment</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container navigation">
          <div class="navbar-header page-scroll">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target=".navbar-main-collapse"
            >
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
                                        <span class="fa fa-pencil-square-o"></span> Make an appoinment <small>(It's free!)</small>
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
                                            * We'll contact you by phone & email later *
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

          <!--login body-->
    <div class="auth-content auth-login">
        <form action="./login.php" method="POST">
            <h1 class="text-center">Login</h1>

         <?php include("./includes/formErrors.php") ?>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" value="<?php echo $username ?>" name="username" placeholder="" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" value="<?php echo $password ?>" name="password" placeholder="" />
            </div>

            <div class="sign-register">
                <button type="submit" name="login" class="btn btn-lg btn-info login">
                    Login
                </button>
            </div>
        </form>
    </div>
    <!--login body-->
            </div>
        </section>
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