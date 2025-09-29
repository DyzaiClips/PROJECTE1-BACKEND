<?php
$path = __DIR__ . "/../language/ca.php";
// echo $path;
include($path); //language text
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login example</title>
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="app_view.php">

                <img src="../img/Pokeball.svg" alt="Pokeball" width="30" height="24" class="me-2">
                CODE PARADISE
            </a>


            <ul class="nav">

                <li class="nav-item">
                    <a class="nav-link" href="#"><?= $text['user_profile'] ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../controller/logout_controller.php">Logout</a>
                </li>

            </ul>

        </div>
    </nav>