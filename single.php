<?php include('./includes/functions.php');
$singlePost = array();
$posts = selectAll('posts', ['published' => 1]);
$topics = selectAll('topics');
if (isset($_GET['id'])) {
    $singlePost = selectOne('posts', ['id' => $_GET['id']]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Single-Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/healthtipsCSS/font-awesome/css/solid.min.css" />
    <link rel="stylesheet" href="./css/healthtipsCSS/font-awesome/css/brands.min.css" />
    <link rel="stylesheet" href="./css/healthtipsCSS/font-awesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="./css/healthtipsCSS/bootstrap.css" />
    <link rel="stylesheet" href="./css/healthtipsCSS/healthtips.css" />
</head>

<body>
<!--facebook sdk-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
<!--facebook sdk-->
    <div class="navigation-header">
        <div class="top-bar">
       
            <div class="need-help">
                <p>Need help purchasing a health plan ? </p>
                <button type="button" class="btn btn-danger ml-2" data-toggle="modal"
                    data-target="#appointment-modal"><span class="font-weight-bold">BOOK AN
                        APPOINTMENT</span></button>
            </div>
        </div>
        <div class="navigation-menu">
            <nav class="navbar navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="index.php"><img src="./img/expressLogo.png" /></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#ourservice">OUR SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="community.php">OUR NGO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="healthtips.php">HEALTH BLOG</a>
                        </li>
						<li class="login-navbar"><a class="nav-link" href="./login.php">LOGIN&nbsp;<i class="fa fa-lock"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>

    <!--page wrapper-->
    <div class="page-wrapper">

        <!--content-->
        <div class="content clearfix">
            <div class="main-content single">
                <h1 class="recent-post text-center mb-5"><?php echo $singlePost['title'] ?></h1>
                 <div class="post-content">
				  <?php echo $singlePost['body']; ?>
				 </div>
            </div>
             <!--side-bar-->
        <div class="side-bar single">
            <div class="section popular">
            <h2 class="mb-3">Popular</h2>
             <?php foreach ($posts as $post) : ?>
                    <div class="post">
                        <img src="<?php echo './img/' . $post['image'] ?>" alt="" />
                        <p><a href="single.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></p>
                    </div>
                    <?php endforeach ?>
          </div>
          <div class="section topics">
            <h2 class="mb-3">Topics</h2>
            <ul>
                <?php foreach ($topics as $topic) : ?>
                        <li><a href="healthtips.php?pid=<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></a></li>
                        <?php endforeach ?>
             
            </ul>
          </div>
        </div>
		
        <!--side-bar-->
        </div>
        <!--content-->
    </div>
    <!--page wrapper-->

    <!--footer-->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h5>QUICK LINKS</h5>
                <hr class="cta">
                <a href="index.php"><strong>HOME</strong></a><br>
                <a href="about.html"><strong>ABOUT US</strong></a><br>
                <a href="community.php"><strong>OUR NGO</strong></a><br>
                <a href="healthtips.php"><strong>HEALTH BLOG</strong></a><br>
                <a href="faq.html"><strong>FAQ</strong></a><br>
            </div>
            <div class="footer-section links">
                <h5>CONNECT WITH US</h5>
                <hr class="cta">

                <p>
                    <i class="fa fa-phone"></i><span class="pl-2"> (+233) 542-053-335</span>
                </p>
                <p>
                    <i class="fa fa-envelope"></i><span class="pl-2"> expressmedgh@gmail.com</span>
                </p>
                <div>
                    <h5>GET OUR NEWSLETTER</h5>
                    <hr class="cta">
                    <form class="form-inline">
                        <input type="text" class="form-control form-control-sm" placeholder="Your email"
                            arial-label="Your email" aria-describedby="basic-addon2">
                        <button class="btn btn-sm btn-info" type="submit"><span
                                class="font-weight-bold">SUBSCRIBE</span></button>
                    </form>
                </div>

            </div>
            <div class="footer-section contact-form">

                <h5>OUR LOCATION</h5>
                <hr class="cta">
                <p>B712/15 Adamu Lane Street, Russia - Accra</p>

                <h5>FOLLOW US</h5>
                <hr class="cta">
                <div class="social">
                    <a class="facebook ml-1" href="#"><i class=" fa-2x fab fa-facebook"></i></a>
                    <a class="twitter ml-1" href="#"><i class="fa-2x fab fa-twitter"></i></a>
                    <a class="instagram ml-1" href="#"><i class="fa-2x fab fa-instagram"></i></a>
                    <a class="youtube ml-1" href="#"><i class="fa-2x fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="text-center float-left">
                <p>&copy;Copyright - ExpressMedGhana. All rights reserved.</p>
            </div>
            <div class="text-center float-right">
                <p>Designed by <a href="https://webspace360.com/"><span class="text-white">webspace360</span></a></p>
            </div>
        </div>
    </div>
    <!--footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/slick/slick/slick.min.js"></script>
    <script src="./js/healthtips.js"></script>
</body>

</html>