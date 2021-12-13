<?php

    include 'database.php';

    $id = $_POST['id'];
    $status = $_POST['status'];
    $result = $induction->query("UPDATE `app` SET `status` = '$status' WHERE `id` = '$id'");


    header('Location: /pages/adminpanel.php');
