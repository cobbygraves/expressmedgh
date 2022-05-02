<?php

$id = '';
$name = '';
$description = '';
$errors = array();

if (isset($_POST['add-topic'])) {


    if (empty($_POST['name'])) {
        array_push($errors, 'Name is required');
    }

    if (empty($_POST['description'])) {
        array_push($errors, 'Description is required');
    }

    $topicExist = selectOne('topics', ['name' => $_POST['name']]);
    if (isset($topicExist)) {
        array_push($errors, 'Topic Already Exist');
    }

    if (count($errors) === 0) {
        unset($_POST['add-topic']);
        $topicId = create('topics', $_POST);
        $_SESSION['topic-success'] = "topic created successfully";
        header("location: ./index.php");
        exit();
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

$topics = selectAll('topics');

if (isset($_GET['id'])) {
    $topic = selectOne('topics', ['id' => $_GET['id']]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if (isset($_POST['update-topic'])) {
    if (empty($_POST['name'])) {
        array_push($errors, 'Name is required');
    }

    $topicExist = selectOne('topics', ['name' => $_POST['name']]);
	
    if (isset($topicExist)) {
        if ($topicExist['id'] != ($_POST['id'])) {
            array_push($errors, 'Topic already exist');
        }
    }

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-topic']);
        unset($_POST['id']);
        $name = $_POST['name'];
        $description = $_POST['description'];
        update('topics', $id, $_POST);
        $_SESSION['topic-update'] = "Topic updated successfully";
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

if (isset($_GET['del_id'])) {
    delete('topics', $_GET['del_id']);
    $_SESSION['delete-topic'] = "Topic deleted successfully";
}