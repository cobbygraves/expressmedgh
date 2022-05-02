<?php
include('../../includes/functions.php');
include('../../includes/addUser.php');
include('../../includes/middleware.php');
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMINISTRATION - Manage Users</title>
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
                <a href="./create.php" class="btn btn-lg btn-success">Add Users</a>
                <a href="./index.php" class="btn btn-lg btn-secondary">Manage Users</a>
            </div>
            <div class="content">
                <h2>Manage Users</h2>
				 <?php if (isset($_SESSION['user-success'])) :
                ?>
                <p class="alert alert-success text-center"><?php echo $_SESSION['user-success'] ?></p>

                <?php
                    unset($_SESSION['user-success']);
                endif
                ?>
				
				 <?php
                if (isset($_SESSION['delete-user'])) :
                ?>
                <p class="alert alert-success text-center"><?php echo $_SESSION['delete-user'] ?></p>

                <?php
                    unset($_SESSION['delete-user']);
                endif
                ?>
				
				<?php
                if (isset($_SESSION['user-admin'])) :
                ?>
                <p class="alert alert-success text-center"><?php echo $_SESSION['user-admin'] ?></p>

                <?php
                    unset($_SESSION['user-admin']);
                endif
                ?>

                <?php
                if (isset($_SESSION['user-author'])) :
                ?>
                <p class="alert alert-success text-center"><?php echo $_SESSION['user-author'] ?></p>

                <?php
                    unset($_SESSION['user-author']);
                endif
                ?>
                <table>
                    <thead>
                        <th>S/N</th>
                        <th>Username</th>
                  
                        <th colspan="2">Action</th>
                    </thead>

                      <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['username'] ?></td>
                            </td>
                            <td><a href="./index.php?delID=<?php echo $user['id'] ?>" class="text-danger">delete</a>
                            </td>
                            <!--editting-->
                            <?php if ($user['admin']) : ?>
                            <td><a href="./index.php?authorID=<?php echo $user['id'] ?>" class="text-warning">Unauthorize</a>
                            </td>
                            <?php else : ?>
                            <td><a href="./index.php?adminID=<?php echo $user['id'] ?>" class="text-success">Authorize</a>
                            </td>
                            <?php endif ?>
                            <!--editting-->
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
    <script src="../../js/admin.js"></script>
</body>

</html>