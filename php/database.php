<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "urok_db";

$induction = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($induction == false) {
    echo "ошибка подключения к БД";
};