<?php
session_start();
require_once("../app/models/ProfileModel.php");
require_once("../app/controllers/ProfileController.php");
require_once("../app/views/ProfileView.php");

$model = new ProfileModel();
$controller = new profileController($model);
$view = new profileView();

$user = $controller->getProfile();
$view->profile($user);
?>