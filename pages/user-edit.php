<?php
if ($_SESSION['user']->roots){
    include_once 'libphp/User.php';
    $user =  new User();
    die(json_encode($user->updateUser($_POST)));
}else
    die();


