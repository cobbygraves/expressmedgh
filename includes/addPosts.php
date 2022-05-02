<?php
$postID = '';
$title = '';
$body = '';
$topic_id = '';
$published = '';

$errors = array();
$topics = selectAll('topics');
$posts = selectAll('posts');

if (isset($_POST['add-post'])) {


    //code to validate user

    if (empty($_POST['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($_POST['body'])) {
        array_push($errors, 'Content is required');
    }

    // Image upload validation
    if (empty($_FILES['image']['name'])) {
        array_push($errors, 'Post image is required');
    } else {
        $imageName = time() . '_' . $_FILES['image']['name'];
        $imageDestination = '../../img/' . $imageName;
        $isUploaded = move_uploaded_file($_FILES['image']['tmp_name'], $imageDestination);
        if ($isUploaded) {
            $_POST['image'] = $imageName;
        } else {
            array_push($errors, 'Failed to upload image');
        }
    }


    if (empty($_POST['topic_id'])) {
        array_push($errors, 'Please select a topic');
    }

    $postExist = selectOne('posts', ['title' => $_POST['title']]);
    if (isset($postExist)) {
        array_push($errors, 'Post Already Exist');
    }

    if (count($errors) === 0) {
        unset($_POST['add-post']);
        $_POST['username'] = $_SESSION['username'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $post_id = create('posts', $_POST);
        header("location: ./index.php");
        $_SESSION['post-success'] = "Post created successfully";
        //code for mailing post to subscribers
        $mailImage = $_POST['image'];
        $mailTitle = $_POST['title'];
        //$subscribers = selectAll('subscribers');

        global $conn;
        $emailsquery = 'select email From subscribers';
        $emails = array();
        $emailresult = mysqli_query($conn, $emailsquery);
        while ($row = mysqli_fetch_assoc($emailresult)) {
            $emails[] = $row['email']; // email id of user

        }
        for ($i = 0; $i < count($emails); $i++) {
            $to  = $emails[$i];

            // subject
            $subject = $mailTitle;
            $message = "<html>
               <head></head>
               <body>
               <div>
               <a href='expressmedgh.com/single.php?id=<?php echo $post_id?>'><img
    src='expressmedgh.com/assets/img/<?php echo $mailImage ?>' alt='linkImage' style='width: 150px; height: 150px;'></a>
</div>
</body>

</html>" . "\n";
$headers = "FROM : mail.expressmedgh.com" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
// $headers = "FROM : smtp.gmail.com";
mail($to, $subject, $message, $headers);
}
exit();
} else {
$title = $_POST['title'];
$body = $_POST['body'];
$published = isset($_POST['published']) ? 1 : 0;
}
// code to validate user

}

// code to delete a post
if (isset($_GET['del_postID'])) {
delete('posts', $_GET['del_postID']);
$_SESSION['delete-post'] = "Post deleted successfully";
}

// code to publish a post

if (isset($_GET['publish_postID'])) {
update('posts', $_GET['publish_postID'], ['published' => 1]);
$_SESSION['publish_postID'] = "Post published successfully";
}

// code to unpublish a post

if (isset($_GET['unpublish_postID'])) {
update('posts', $_GET['unpublish_postID'], ['published' => 0]);
$_SESSION['unpublish_postID'] = "Post unpublished successfully";
}

if (isset($_GET['edit_postID'])) {
$post = selectOne('posts', ['id' => $_GET['edit_postID']]);
$postID = $post['id'];
$title = $post['title'];
$body = $post['body'];
$topic_id = $post['topic_id'];
$published = $post['published'];
}

// code to update a post

if (isset($_POST['post-update'])) {
if (empty($_POST['title'])) {
array_push($errors, 'Title is required');
}

if (empty($_POST['body'])) {
array_push($errors, 'Content is required');
}

if (empty($_FILES['image']['name'])) {
array_push($errors, 'Post image is required');
} else {
$imageName = time() . '_' . $_FILES['image']['name'];
$imageDestination = '../../img/' . $imageName;
$isUploaded = move_uploaded_file($_FILES['image']['tmp_name'], $imageDestination);
if ($isUploaded) {
$_POST['image'] = $imageName;
} else {
array_push($errors, 'Failed to upload image');
}
}

if (empty($_POST['topic_id'])) {
array_push($errors, 'Please select a topic');
}

$postExist = selectOne('posts', ['title' => $_POST['title']]);

if ($postExist) {
if ($postExist['id'] != ($_POST['id'])) {
array_push($errors, 'Post Already Exist');
}
}

if (count($errors) === 0) {
$postID = $_POST['id'];
unset($_POST['post-update'], $_POST['id']);
$_POST['username'] = $_SESSION['username'];
$_POST['published'] = isset($_POST['published']) ? 1 : 0;
update('posts', $postID, $_POST);
$_SESSION['post-update'] = "Post updated successfully";
} else {
$title = $_POST['title'];
$body = $_POST['body'];
$topic_id = $_POST['topic_id'];
$published = isset($_POST['published']) ? 1 : 0;
}
}