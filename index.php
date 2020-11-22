<?php
session_start();
error_reporting(0);

switch ($_SERVER['REQUEST_URI']){
    case '/':
        include 'pages/home.php';
        break;
    case '/user/edit':
        include 'pages/user-edit.php';
        break;
    case '/user/delete':
        include 'pages/user-delete.php';
        break;
    case '/registration':
        include 'pages/ragistration.php';
        break;
    case '/logout':
        include 'pages/logout.php';
        break;
    case '/login':
        if (!empty($_SESSION['user'])){
            header('Location: /');
            exit();
        }
        include 'pages/login.php';
        break;

    case '/admin':
        include 'pages/admin.php';
        break;

    default:
        include 'pages/404.php';

}
die();
