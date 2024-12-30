<?php
session_start();
require_once("../app/models/ProfileEditModel.php");
require_once("../app/controllers/ProfileEditController.php");
require_once("../app/views/ProfileEditView.php");

$model = new ProfileEditModel();
$controller = new ProfileEditController($model);
$view = new ProfileEditView();

$controller->updateProfile();
$view->editProfile();
?>