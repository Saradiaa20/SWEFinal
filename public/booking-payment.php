<?php
session_start();
require_once("../../feeedback/app/models/BPaymentModel.php");
require_once("../../feeedback/app/controllers/BPaymentController.php");
require_once("../../feeedback/app/views/BPaymentView.php");

$model = new PaymentModel();
$controller = new PaymentController($model);
$view = new PaymentView();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->processPayment();
}

$payment_methods = $controller->getPaymentMethods();
$view->output($payment_methods);
?>