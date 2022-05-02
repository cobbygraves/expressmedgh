<?php
include('./includes/functions.php');
$page =1;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
  $num_per_page = 5;
$start_from = ($page - 1)*5;
$topics = selectAll('topics');
$trendigPosts = selectAll('posts', ['published' => 1]);
$posts = array();
$postTitle = "Recent Posts";

  if (isset($_POST['search'])) {
    $posts = array_reverse(searchPost($_POST['search']));
    $postTitle = "You searched for : '" . $_POST['search'] . "'";
} elseif (isset($_GET['pid'])) {
    $topic = selectOne('topics', ['id' => $_GET['pid']]);
    $postTitle = "Related posts on : '" . $topic['name'] . "'";
    $posts = array_reverse(searchRelatedPost($_GET['pid']));
} else {
    global $conn;
    $query = "SELECT * FROM posts WHERE published = 1 LIMIT $start_from, $num_per_page";
    $result = mysqli_query($conn, $query);
    $posts = array_reverse(mysqli_fetch_all($result, MYSQLI_ASSOC));
   // $posts = array_reverse(selectAll('posts', ['published' => 1]));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>HEALTH TIPS</title>
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

            <div class="need-help col-sm-6 col-md-6">
                <p>Need help purchasing a health plan ? </p>
                <button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#appointment-modal"><span class="font-weight-bold">BOOK AN
                        APPOINTMENT</span></button>
            </div>
        </div>
        <div class="navigation-menu">
            <nav class="navbar navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="index.php"><img src="./img/expressLogo.png" /></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="healthtips.php">BLOG</a>
                        </li>
                        <li class="login-navbar"><a class="nav-link" href="./login.php">LOGIN<i class="ml-1 fa fa-lock"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>

    <!--page wrapper-->
    <div class="page-wrapper">
        <?php if (!(isset($_POST['search']) || isset($_GET['pid']))) : ?>
        <!--slider-->
        <div class="slider-wrapper">
            <h1 class="slider-tite">Trending Posts</h1>
            <div class="slider-content">
                <?php foreach ($trendigPosts as $post) : ?>
                <div class="slider-post">
                    <a href="single.php?id=<?php echo $post['id'] ?>"><img src="<?php echo './img/' . $post['image'] ?>" alt="" class="post-image" /></a>
                    <div class="post-content text-center">
                        <h5><a href="single.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></h5>
                    </div>
                </div>
                <?php endforeach ?>

            </div>
        </div>
        <!--slider-->
        <?php endif ?>
        <!--content-->
        <div class="content clearfix">
            <div class="main-content">
                <h1 class="recent-post text-center"><?php echo $postTitle ?></h1>
                <?php foreach ($posts as $post) : ?>
                <div class="post">
                    <img src="<?php echo './img/' . $post['image'] ?>" alt="" class="post-photo" />
                    <div class="post-preview">
                        <a href="single.php?id=<?php echo $post['id'] ?>" alt="#">
                            <h3 class="post-title"><?php echo $post['title'] ?></h3>
                        </a>
                         <div><i class="fa fa-calendar"></i><span class="pl-1"><?php echo date('F j, Y', strtotime($post['created_at'])) ?></span></div>
                        <p class="preview-text">
                            <?php echo substr($post['body'], 0, 200) ?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id'] ?>" class="btn btn-sm btn-outline-primary">Read More...</a>
                    </div>
                </div>
                <?php endforeach ?>
                <!--pagination-->
                <div class="text-center">
                    <?php 
            global $conn;
            $pagination_query = "SELECT * FROM posts WHERE published = 1";
            $pagination_result = mysqli_query($conn, $pagination_query);
            $total_records = mysqli_num_rows($pagination_result);
            $total_pages = ceil($total_records / $num_per_page);
                               if($page > 1): ?>
                    <a href="healthtips.php?page=<?php echo ($page - 1)?>" class="btn btn-dark mr-1">Previous</a>
                    <?php endif ?>
                    <?php             
            for($i = 1; $i<$total_pages; $i++):?>
                    <a href="healthtips.php?page=<?php echo $i?>" class="btn btn-outline-dark mr-1"><?php echo $i ?></a>
                    <?php endfor;
            if($i > $page): ?>
                    <a href="healthtips.php?page=<?php echo ($page + 1)?>" class="btn btn-dark mr-1">Next</a>
                    <?php endif ?>
                </div>
                <!--pagination-->
            </div>
            <!--side-bar-->
            <div class="side-bar">

                <div class="section search">
                    <h2 class="mb-2">Search</h2>
                    <form method="POST" action="healthtips.php">
                        <input type="text" name="search" class="search-input" placeholder="Search..." />
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="mb-3">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $topic) : ?>

                        <li><a href="healthtips.php?pid=<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></a></li>

                        <?php endforeach ?>

                    </ul>
                </div>
                <div class="facebook-page section">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fexpressmedhomehealthcare&tabs=timeline&width=850&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
                <a href="#"><strong>BLOG</strong></a><br>
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
                        <input type="text" class="form-control form-control-sm" placeholder="Your email" arial-label="Your email" aria-describedby="basic-addon2">
                        <button class="btn btn-sm btn-info" type="submit"><span class="font-weight-bold">SUBSCRIBE</span></button>
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
                <p>Designed by <a href="https://webspace360.com/"><span class="text-white">Webspace360</span></a></p>
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
