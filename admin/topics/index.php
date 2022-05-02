<?php
include('../../includes/functions.php');
include('../../includes/addTopics.php');
include('../../includes/middleware.php');
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMINISTRATION - Manage Topics</title>
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
                <li><a href="./index.php">Manage Topics</a></li>
                <li><a href="../users/index.php">Manage Users</a></li>
                <li><a href="../ngo/index.php">Manage NGO</a></li>
            </ul>
        </div>
        <!--left-sidebar-->
        <!--admin-content-->
        <div class="admin-content">
            <div class="admin-buttons">
                <a href="../topics/create.php" class="btn btn-lg btn-success">Add Topic</a>
                <a href="./index.php" class="btn btn-lg btn-secondary">Manage Topics</a>
            </div>
            <div class="content">
                <h2>Manage Topics</h2>
				<?php
            if (isset($_SESSION['topic-success'])) :
            ?>
            <p class="alert alert-success text-center"><?php echo $_SESSION['topic-success'] ?></p>

            <?php
                unset($_SESSION['topic-success']);
            endif
            ?>
			
			<?php
            if (isset($_SESSION['delete-topic'])) :
            ?>
            <p class="alert alert-success text-center"><?php echo $_SESSION['delete-topic'] ?></p>

            <?php
                unset($_SESSION['delete-topic']);
            endif
            ?>
                <table>
                    <thead>
                        <th>S/N</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>

                    <tbody>
                        <?php foreach ($topics as $topic) : ?>
                        <tr>
                            <td><?php echo $topic['id'] ?></td>
                            <td><?php echo $topic['name'] ?></td>
                            <td><a href="./edit.php?id=<?php echo $topic['id'] ?>" class="text-info">edit</a></td>
                            <td><a href="index.php?del_id=<?php echo $topic['id'] ?>" class="text-danger">delete</a></td>
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