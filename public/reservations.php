<?php
session_start();
require_once("../app/models/ReservationModel.php");
require_once("../app/controllers/ReservationController.php");
require_once("../app/views/ReservationView.php");

$model = new ReservationModel();
$controller = new ReservationController($model);
$view = new ReservationView();

$reservations = $controller->getReservations();
$view->output($reservations);
?>