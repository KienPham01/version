<?php
require '../Model/Database.php';
require '../View/ViewOrder.php';
class ControlerOrder
{
	var $modelCustomer;
	var $viewOrder;

	public function __construct()
    {
        $this->model = new Customer();
        $this->view = new ViewOrder();
    }

	public function Order()
	{
		$this->$viewOrder->inputCustomer();

	}

	public function addNewCustomer()
	{

		$viewOrder = new viewOrder();
		$viewOrder->inputCustomer();

	}


	public function viewCustomer()
	{
		$modelCustomer = new Customer();
		$result = $modelCustomer->selectCustomer();

		$viewOrder = new viewOrder();
		$viewOrder->showInformation($result);

	}

	public function viewSearch()
	{
		$modelCustomer = new Customer();
		$result = $modelCustomer->searchCustomer();
		
		$viewOrder = new viewOrder();
		$viewOrder->showInformation($result);

	}

	public function HomePage()

	{
		$this->view->homeDisplay();


	}




	public function deleteCustomer()

	{

		$modelCustomer = new Customer();
		$result = $modelCustomer->deleteCustomer();

		
		if ($result === true){

			$this->viewCustomer();


		}
			var_dump($result);
		

	}

	public function searchCustomer()
	{

		$modelCustomer = new Customer();




	}

	public function inputCustomer()
	{
		$modelCustomer = new Customer();
		$result = $modelCustomer->saveCustomer();
		if($result === true){

			$this->viewCustomer();
		}
		else{
			var_dump($result);
		}



	}


}
	


  ?>