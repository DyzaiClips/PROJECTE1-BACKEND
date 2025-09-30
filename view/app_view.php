<?php
session_start();
include('../language/ca.php');
if (!isset($_SESSION['user_logged'])) {
    header('Location: ./home.php');
    exit();
}

$taskList = $_SESSION['todoList'];
$id_user = $_SESSION['user_logged']['id'];
$rol_user = $_SESSION['user_logged']['rol'];
//nomes carrega les tasques de l'usuari
if ($rol_user != 'admin') {
    $taskList = [];
    foreach ($_SESSION['todoList'] as $task) {
        if ($id_user == $task['id_user']) {
            array_push($taskList, $task);
        }
    }
}
include('../templates/navbar_app.php');
include('../language/ca.php');


?>

<div class="text-center vh-50 d-flex flex-column justify-content-center m-5">
    <h1 class="display-3 mb-4"><?= $text['title_app'] ?></h1>

    <img src="../img/Imatge_App_Inici.jpg" class="rounded mx-auto d-block" alt="...">

</div>

<div class="container mx-auto mt-3 my-6">
    <div class="row mb-4">
        <?php
        foreach ($taskList as $task) {
            ?>
            <!-- Comença la fila amb les tasques -->
            <div class="col-md-3 md-2">
                <!-- Comença la tasca -->
                <div class="card" style="width: 18rem;">
                    <img src=<?= $task['imatge'] ?> class="card-img-top" alt=<? $task['alt']?>>
                    <div class="card-body">
                        <h5 class="card-title"><?= $task['name'] ?></h5>
                        <p class="card-text"><?= $task['hours_played'] ?></p>
                        <div class="d-flex justify-content-center">
                            <!-- BOTO EDITAR -->
                            <form action="../view/editTask_view.php" method="post">
                                <input type="hidden" name="id_task" value=<?= $task['id'] ?>>
                                <input class="btn btn-success" type="submit" value="Edit">
                            </form>
                            <!-- BOTO ELIMINAR -->
                            <a href="../controller/delete_task_controller.php?id=<?= $task['id'] ?>"
                                class="btn btn-danger">Delete</a>
                            
                        </div>
                    </div>
                </div>
                <!--Acaba la tasca-->
            </div>
            <!-- Acaba la fila-->
        <?php } ?>
    </div>
    <div>
                <input class="btn btn-secondary" type="submit" value="Add">
            </div>
</div>

<?php

include('../templates/footer.php');
?>