<?php

include('validateUser.php');

$id = '';
$admin = '';
$email = '';
$username = '';
$password = '';
$errors = array();

$users = selectAll('users');

if (isset($_POST['add-user'])) {

    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-user'], $_POST['confirm-password']);
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $id = create('users', $_POST);
        $_SESSION['user-success'] = "User added successfully";
        header("location: ./index.php");
        exit();
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }
}

if (isset($_GET['delID'])) {
    delete('users', $_GET['delID']);
    $_SESSION['delete-user'] = "User deleted successfully";
}

if (isset($_GET['authorID'])) {
    update('users', $_GET['authorID'], ['admin' => 0]);
    $_SESSION['user-author'] = "User is now unauthorized";
}

if (isset($_GET['adminID'])) {
    update('users', $_GET['adminID'], ['admin' => 1]);
    $_SESSION['user-admin'] = "User is now Authorized";
}