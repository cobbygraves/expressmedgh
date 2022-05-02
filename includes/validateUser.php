<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    if (($user['password']) !== ($user['confirm-password'])) {
        array_push($errors, 'Paswords do not match');
    }

    $emailExist = selectOne('users', ['email' => $user['email']]);
    if (isset($emailExist)) {
        array_push($errors, 'Email already exist');
    }
	
	  $userExist = selectOne('users', ['username' => $user['username']]);
    if (isset($userExist)) {
        array_push($errors, 'Username already exist');
    }

    return $errors;
}