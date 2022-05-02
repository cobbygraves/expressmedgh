<?php
include('../../includes/functions.php');
include('../../includes/addPosts.php');
include('../../includes/middleware.php');
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMINISTRATION - Edit Post</title>
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
        <!--left-sidebar-->
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
                <a href="./index.php" class="btn btn-lg btn-secondary">Manage Posts</a
          >
        </div>
        <div class="content">
          <h2>Update Posts</h2>
		     <?php
      if (isset($_SESSION['post-update'])) :
      ?>
            <p class="alert alert-success text-center"><?php echo $_SESSION['post-update'] ?></p>

            <?php
        unset($_SESSION['post-update']);
      endif
      ?>
	   <?php include("../../includes/formErrors.php") ?>
          <form class="form-group" action="./edit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $postID ?>" placeholder="" />
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $title ?>" placeholder="" />
                    <label for="body">Body</label>
                    <textarea id="editor" class="form-control" name="body"><?php echo $body ?></textarea>
                    <div>
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" />
                    </div>
                    <label for="topic_id">Topic</label>
                    <select class="form-control" name="topic_id">
                        <option value=""></option>
                        <?php foreach ($topics as $topic) : ?>
                        <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                        <?php endforeach ?>
                    </select><br />
                    <div class="form-check">
                        <?php if (empty($published) && ($published == 0)) : ?>
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="published">
                            Publish
                        </label>
                        <?php else : ?>
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="published" checked>
                            Publish
                        </label>
                        <?php endif ?>
                    </div><br />
                    <input type="submit" name="post-update" class="form-control btn-lg btn-success"
                        value="Update Post" />
                </form>
        </div>
		
      </div>
      <!--admin-content-->
    </div>
    <!--page wrapper-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<script src="../../js/ckeditor5/ckeditor.js"></script>
    <script src="../../js/admin.js"></script>
</body>

</html>