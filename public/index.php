<?php
// Include the routes
require_once('../routes/routes.php');
require_once '../app/controller/CheckinController.php';

$controller = new CheckinController();
$controller->handleRequest();
?>
