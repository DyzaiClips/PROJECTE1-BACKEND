<?php
session_start();

//comporvacions tipiques d'error request i post

$_SESSION['user_logged']['name'] =  $_POST['name'];
$_SESSION['user_logged']['username'] =  $_POST['username'];
$_SESSION['user_logged']['mail'] =  $_POST['mail'];

header ('Location: ../view/app_view.php');  