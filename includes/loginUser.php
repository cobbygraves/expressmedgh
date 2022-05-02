<?php

include("functions.php");


$errors = array();
$username = "";
$password = "";

function loginUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    return $errors;
}


if (isset($_POST['login'])) {

    $errors = loginUser($_POST);

    if (count($errors) === 0) {

       // $user = selectOne('users', ['username' => $_POST['username'], 'password' => md5($_POST['password'] . 'webspace360')]);
	     $user = selectOne('users', ['username' => $_POST['username']]);
        $userExist = password_verify($_POST['password'], $user['password']);
        if ($userExist && ($user['admin'] == 1)) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            header('location: ./admin/posts/index.php');
            exit();
        } else {
            array_push($errors, 'Wrong Username / Password');
        }
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
}