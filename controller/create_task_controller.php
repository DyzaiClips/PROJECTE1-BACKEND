<?php
session_start();
foreach (glob(__DIR__ . '/../functions/*.php') as $fitxer) {
    include($fitxer);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset($_POST['name']) &&
        isset($_POST['hours_played']) 
    ) {
        $name = $_POST['name'];
        $hours_played = $_POST['hours_played'];
        
        $newGame = [
            "id" => getNewTaskId($_SESSION['todoList']),
            "id_user" => $_SESSION['user_logged']['id'],
            "name" => $name,
            "hours_played" => $hours_played,
            "imatge" => "../img/SuperMario3.jpg",
            "alt" => "imatge de SuperMario3"
        ];

        array_push($_SESSION['todoList'], $newGame);

        // Si volem redirigir a dins l'aplicaci´o cal crear
        // la variable de sessio $_SESSION['user_logged']=$newUser
        header('Location: ../view/app_view.php?error=0');
        exit();
    }
}
