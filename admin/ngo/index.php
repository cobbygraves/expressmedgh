<?php
include('../../includes/functions.php');
include('../../includes/addNGO.php');
include('../../includes/middleware.php');
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMINISTRATION - Manage NGO</title>
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
                <a href="./index.php" class="btn btn-lg btn-secondary">Manage NGO</a>
            </div>
            <div class="content">
                <h2>Manage NGO</h2>
				<?php if (isset($_SESSION['ngo-success'])) :
            ?>
            <p class="alert alert-success text-center"><?php echo $_SESSION['ngo-success'] ?></p>

            <?php
                unset($_SESSION['ngo-success']);
            endif
            ?>

            <?php
            if (isset($_SESSION['delete-ngo'])) :
            ?>
            <p class="alert alert-success text-center"><?php echo $_SESSION['delete-ngo'] ?></p>

            <?php
                unset($_SESSION['delete-ngo']);
            endif
            ?>
                <table>
                    <thead>
                        <th>S/N</th>
                        <th>Title</th>
                        <th colspan="2">Action</th>
                    </thead>

                    <tbody>
                         <?php foreach ($ngos as $ngo) : ?>
                        <tr>
                            <td><?php echo $ngo['id'] ?></td>
                            <td><?php echo $ngo['title'] ?></td>
                            <td><a href="./edit.php?edit_ngoID=<?php echo $ngo['id'] ?>" class="text-info">edit</a></td>
                            <td> <a href="./index.php?del_ngoID=<?php echo $ngo['id'] ?>"
                                    class="text-danger">delete</a></td>
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