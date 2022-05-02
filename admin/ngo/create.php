<?php
include('../../includes/functions.php');
include('../../includes/addNGO.php');
include('../../includes/middleware.php');
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMINISTRATION - Add NGO</title>
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
                <li><a href="../posts/index.php">Manage Posts</a></li>
                <li><a href="../topics/index.php">Manage Topics</a></li>
                <li><a href="../users/index.php">Manage Users</a></li>
                 <li><a href="./index.php">Manage NGO</a></li>
            </ul>
        </div>
        <!--left-sidebar-->
        <!--admin-content-->
        <div class="admin-content">
            <div class="admin-buttons">
                <a href="./create.php" class="btn btn-lg btn-success">Add NGO</a>
                <a href="./index.php" class="btn btn-lg btn-secondary">Manage NGO</a
          >
        </div>
        <div class="content">
          <h2>Add NGO</h2>
		    <?php include("../../includes/formErrors.php") ?>
          <form class="form-group" method="post" action="./create.php" enctype="multipart/form-data">
            <label for="title">Title</label>
            <input
              type="text"
              class="form-control"
              name="title"
              value="<?php echo $title ?>"
              placeholder=""
            />
            <label for="body">Content</label>
            <textarea id="editor"
              class="form-control"
              name="content"
            ><?php echo $content ?></textarea>
            <div>
              <label for="image">Image</label>
              <input
                type="file"
                name="image"
                value="<?php echo $image ?>"
                class="form-control"
              />
            </div><br>
			
            <input
              type="submit"
              name="add-ngo"
              id="add-ngo"
              class="form-control btn-lg btn-success"
              value="Add NGO"
            />
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