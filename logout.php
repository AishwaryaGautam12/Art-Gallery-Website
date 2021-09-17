<?php
session_start();
unset($_SESSION['ADMIN_LOGIN']);
unset($_SESSION['ADMIN_USERNAME']);
session_destroy();
$url =  $_SERVER['HTTP_REFERER'];
header('Location:'.$url);
die();
?>