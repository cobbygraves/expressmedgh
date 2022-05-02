<?php
$ngoID = '';
$title = '';
$content = '';

$errors = array();
$ngos = selectAll('ngo');

if (isset($_POST['add-ngo'])) {


    //code to validate user

    if (empty($_POST['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($_POST['content'])) {
        array_push($errors, 'Content is required');
    }

    // Image upload validation
    if (empty($_FILES['image']['name'])) {
        array_push($errors, 'NGO image is required');
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


    $ngoExist = selectOne('ngo', ['title' => $_POST['title']]);
    if (isset($ngoExist)) {
        array_push($errors, 'NGO Already Exist');
    }

    if (count($errors) === 0) {
        unset($_POST['add-ngo']);
        $ngo_id = create('ngo', $_POST);
        header("location: ./index.php");
        $_SESSION['ngo-success'] = "NGO created successfully";
        exit();
    } else {
        $title = $_POST['title'];
        $content = $_POST['content'];
    }
    // code to validate user

}

// code to delete a post
if (isset($_GET['del_ngoID'])) {
    delete('ngo', $_GET['del_ngoID']);
    $_SESSION['delete-ngo'] = "NGO deleted successfully";
}


if (isset($_GET['edit_ngoID'])) {
    $ngo = selectOne('ngo', ['id' => $_GET['edit_ngoID']]);
    $ngoID = $ngo['id'];
    $title = $ngo['title'];
    $content = $ngo['content'];
}

// code to update a post

if (isset($_POST['ngo-update'])) {
    if (empty($_POST['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($_POST['content'])) {
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
	
	 $ngoExist = selectOne('ngo', ['title' => $_POST['title']]);
	 
   if ($ngoExist) {
        if ($ngoExist['id'] != ($_POST['id'])) {
            array_push($errors, 'NGO Already Exist');
        }
    }

    if (count($errors) === 0) {
        $ngoID = $_POST['id'];
        unset($_POST['ngo-update'], $_POST['id']);
        update('ngo', $ngoID, $_POST);
        $_SESSION['ngo-update'] = "NGO updated successfully";
    } else {
        $title = $_POST['title'];
        $content = $_POST['content'];
    }
}
