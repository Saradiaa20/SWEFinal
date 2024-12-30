<?php
session_start();
require_once("../app/models/UserModel.php");
require_once("../app/controllers/UserController.php");
require_once("../app/views/UserView.php");

$model = new UserModel();
$controller = new UserController($model);
$view = new UserView($controller, $model);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signup'])) {
        $controller->register();
    } elseif (isset($_POST['signin'])) {
        $controller->login();
    }
}

$view->output();
?>