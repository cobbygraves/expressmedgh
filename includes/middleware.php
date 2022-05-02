<?php

function adminOnly($redirect = '../../index.php')
{
    if (empty($_SESSION['id']) || empty($_SESSION['id'])) {
        $_SESSION['message'] = 'You are not authorized...Please login ';
        header('location: ' . $redirect);
        exit(0);
    }
}