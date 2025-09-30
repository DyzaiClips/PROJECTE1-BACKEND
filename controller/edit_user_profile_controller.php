<?php
session_start();

//comporvacions tipiques d'error request i post

$id_user = $_POST['id_user'];




header('Location: ../view/user_profile_view.php')
// foreach ($_SESSION['todoList'] as $key => $task) {
//     if ($id_task == $task['id']) {
//         //un cop hem localitzat la tasca
//         //Actualitzar-la amb els valors que s'han pasat pel formulari
//         $_SESSION['todoList'][$key]['name'] = $_POST['name'];
//         header ('Location: ../view/app_view.php');
//     }
// }
?>