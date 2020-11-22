<?php
include_once 'libphp/User.php';
$user =  new User();
die(json_encode($user->updateUser($_POST)));

