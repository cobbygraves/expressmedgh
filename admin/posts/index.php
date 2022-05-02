<?php
include('../../includes/functions.php');
include('../../includes/addPosts.php');
include('../../includes/middleware.php');
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMINISTRATION - Manage Posts</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/healthtipsCSS/font-awesome/css/solid.min.css" />
    <link rel="stylesheet" href="../../css/healthtipsCSS/font-awesome/css/brands.min.css" />
    <link rel="stylesheet" href="../../css/healthtipsCSS/font-awesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../../css/healthtipsCSS/bootstrap.css" />
    <link rel="stylesheet" href="../../css/healthtipsCSS/healthtips.css" />
	<link rel="stylesheet" href="../../css/admin.css" />
</head>

<body>

    <?php include("../../includes/adminHeader.php"); ?>

    <!--page wrapper-->
    <div class="page-wrapper">
        <div class="left-sidebar">
            <ul>
                <li><a href="./index.php">Manage Posts</a></li>
                <li><a href="../topics/index.php">Manage Topics</a></li>
                <li><a href="../users/index.php">Manage Users</a></li>
                 <li><a href="../ngo/index.php">Manage NGO</a></li>
            </ul>
        </div>
        <!--left-sidebar-->
        <!--admin-content-->
        <div class="admin-content">
            <div class="admin-buttons">
                <a href="./create.php" class="btn btn-lg btn-success">Add Post</a>
                <a href="./index.php" class="btn btn-lg btn-secondary">Manage Posts</a>
            </div>
            <div class="content">
                <h2>Manage Posts</h2>
				<?php if (isset($_SESSION['post-success'])) :
            ?>
            <p class="alert alert-success text-center"><?php echo $_SESSION['post-success'] ?></p>

            <?php
                unset($_SESSION['post-success']);
            endif
            ?>

            <?php
            if (isset($_SESSION['delete-post'])) :
            ?>
            <p class="alert alert-success text-center"><?php echo $_SESSION['delete-post'] ?></p>

            <?php
                unset($_SESSION['delete-post']);
            endif
            ?>

            <?php
            if (isset($_SESSION['publish_postID'])) : ?>
            <p class="alert alert-success text-center"><?php echo $_SESSION['publish_postID'] ?></p>
            <?php
                unset($_SESSION['publish_postID']);
            endif
            ?>

            <?php
            if (isset($_SESSION['unpublish_postID'])) : ?>
            <p class="alert alert-success text-center"><?php echo $_SESSION['unpublish_postID'] ?></p>
            <?php
                unset($_SESSION['unpublish_postID']);
            endif
            ?>
                <table>
                    <thead>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>

                    <tbody>
                         <?php foreach ($posts as $post) : ?>
                        <tr>
                            <td><?php echo $post['id'] ?></td>
                            <td><?php echo $post['title'] ?></td>
                             <td><?php echo $post['username'] ?></td>
                            <td><a href="./edit.php?edit_postID=<?php echo $post['id'] ?>" class="text-info">edit</a></td>
                            <td><a <a href="./index.php?del_postID=<?php echo $post['id'] ?>"
                                    class="text-danger">delete</a></td>
                            <?php if ($post['published']) : ?>
                            <td><a href="./index.php?unpublish_postID=<?php echo $post['id'] ?>" class="text-warning">unpublish</a></td>
                            <?php else : ?>
                               <td><a href="./index.php?publish_postID=<?php echo $post['id'] ?>"
                                    class="text-success">publish</a></td>
                            <?php endif ?>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
			  
        </div>
        <!--admin-content-->
    </div>
    <!--page wrapper-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="../../js/admin.js"></script>
</body>

</html>