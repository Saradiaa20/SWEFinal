<?php
session_start();
require_once("../../feeedback/app/models/BookingHistoryModel.php");
require_once("../../feeedback/app/controllers/BookingHistroyController.php");
require_once("../../feeedback/app/views/BookingHistoryView.php");

$model = new BookingHistoryModel();
$controller = new BookingHistoryController($model);
$view = new BookingHistoryView();

$booking_history = $controller->getBookingHistory();
$view->output($booking_history);
?>