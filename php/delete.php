<?php

include 'database.php';

$id = $_GET['id'];
$induction->query("DELETE FROM `app_images` WHERE `app_id` = '$id'");
$induction->query("DELETE FROM `app` WHERE `id` = '$id'");

if($_COOKIE['user'] == ""){
    header('Location: /pages/adminpanel.php');
}else{
    header('Location: /pages/account.php');
}
