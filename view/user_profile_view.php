<?php
session_start();
include('../language/ca.php');
if (!isset($_SESSION['user_logged'])) {
    header('Location: ./home.php');
    exit();
}
include('../templates/navbar_app.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['users'])) {
        foreach ($_SESSION['user'] as $key => $username) {
            if ($_POST['users'] == $username['username']) {
                  echo"<pre>";
                  print_r($username);
                  echo "</pre>";
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="../controller/edit_task_controller.php" method="POST" class="border p-4 bg-light">
                <input type="hidden" name="id_task" value="<?=$task['id'] ?>">    
                <div class="mb-3">
                    <label for="name" class="form-label">Nom: </label>
                    <input type="text" name="name" class="form-control" value="<?= $task['name'] ?>" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary"><?= $text['change_button'] ?></button>
                </div> 
                <!-- control error -->
                <div class="mt-3 text-center">
                    <p class="from-label mb-3 text-danger fw-bold fs-6">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                            if (isset($_GET['error']) && $_GET['error'] == 1) echo $text['register_error_1'];
                            if (isset($_GET['error']) && $_GET['error'] == 2) echo $text['register_error_2'];
                            if (isset($_GET['error']) && $_GET['error'] == 3) echo $text['register_error_3'];
                            if (isset($_GET['error']) && $_GET['error'] == 4) echo $text['register_error_4'];
                            if (isset($_GET['error']) && $_GET['error'] == 5) echo $text['register_error_5'];
                        }
                        ?>
                    </p>
                    <p class="from-label mb-3 text-success fw-bold fs-6">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                            if (isset($_GET['error']) && $_GET['error'] == 0) echo $text['register_exit_0'];;
                        }
                        ?>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
            }
        }
    }
}
?>