<?php
require_once "./model/user.php";
$conncect = $db->connect();
$user = new User($conncect);

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = "";
}
require_once "config.php";
switch ($action){
    default:
        $data = $user->getData();
        require_once "view/index.php";
        break;
}