<?php
if ($_SESSION['user']->roots){
    include_once 'libphp/User.php';
    $user =  new User();
    $data = new stdClass();
    $data->response = $user->deleteUser($_POST);
    die(json_encode($data));
}else
    die();
