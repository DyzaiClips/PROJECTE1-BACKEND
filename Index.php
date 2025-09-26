<?php
session_start();
if (!isset($_SESSION['users'])) {
    include('./model/users_model.php');
}

if (!isset($_SESSION['taskList'])) {
    include('./model/tasks_model.php');
}

header ('Location: ./view/home.php');
