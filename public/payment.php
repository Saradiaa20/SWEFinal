<?php
session_start();
require_once("../../feeedback/app/models/PaymentModel.php");
require_once("../../feeedback/app/controllers/PaymentController.php");
require_once("../../feeedback/app/views/PaymentView.php");

$model = new PaymentModel();
$controller = new PaymentController($model);
$view = new PaymentView();

$payment_methods = $controller->getPaymentMethods();
$view->output($payment_methods);
?>