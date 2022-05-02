<?php
include('../../includes/functions.php');
include('../../includes/addUser.php');
include('../../includes/middleware.php');
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMINISTRATION - Add User</title>
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
                <li><a href="./index.php">Manage Users</a></li>
                <li><a href="../ngo/index.php">Manage NGO</a></li>
            </ul>
        </div>
        <!--left-sidebar-->
        <!--admin-content-->
        <div class="admin-content">
            <div class="admin-buttons">
                <a href="./create.php" class="btn btn-lg btn-success">Add User</a>
                <a href="./index.php" class="btn btn-lg btn-secondary">Manage Users</a
          >
        </div>
        <div class="content">
          <h2>Add User</h2>
		  <?php include("../../includes/formErrors.php") ?>
          <form class="form-group" method="post" action="./create.php">
            <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username ?>" placeholder="" />
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email ?>" id="email" placeholder="" />
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $password ?>" id="password" placeholder="" />
            <label for="confirm-password">Confirm Password</label>
            <input
              type="password"
              class="form-control"
              name="confirm-password"
              id="confirm-password"
              placeholder=""
            /><br/>
           <div class="form-check">
                       <?php if (empty($admin)) : ?>
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="admin">
                            Admin
                        </label>
                        <?php else : ?>
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="admin" checked>
                            Admin
                        </label>
                        <?php endif ?>
            <br />
            <input
              type="submit"
              name="add-user"
              id="add-user"
              class="form-control btn-lg btn-success"
              value="Add User"
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