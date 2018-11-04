<?php

	Class ViewOrder
	{
		public function inputCustomer()
		{
			include '../contact.php';
		}

		public function showInformation($result)
		{
			include '../listCustomer.php';

		}

		public function homeDisplay()
		{
			include '../Template/home.php';


		}



	}
	


  ?>

  