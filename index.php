<?php
require_once 'ControllerCustomer.php';
$task = $_GET['task'];
$Customer = new ControlerOrder();

switch ($task) {
	
	case 'Order':
		$Customer->addNewCustomer();
		break;
	case 'View':
		$Customer->viewCustomer();
		break;
	case 'newCustomer':
		 $Customer->inputCustomer();
		break;

	case 'Search':
		$Customer->viewSearch();

		break;

	case 'Delete':
		$Customer->deleteCustomer();
		break;
	default:
		$Customer->HomePage();
		break;
}



  ?>