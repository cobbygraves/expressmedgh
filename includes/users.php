<?php
include("functions.php");
include("validateUser.php");

$errors = array();
$username = "";
$email = "";
$password = "";
$confirm_password = "";
$isRegister = false;

if (isset($_POST['btn-register'])) {

    $isRegister = true;

    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['btn-register'], $_POST['confirm-password']);
        $_POST['admin'] = 0;
         $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id' => $user_id]);
        /*
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You successfully logged in';
        header('location: ./admin/posts/index.html');
        exit();
        */
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];
    }
}