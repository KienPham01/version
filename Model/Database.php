<?php



/**
* 
*/
class Customer
{



	public function inputCustomer()
	{
		$servername = "localhost";
		$username = "Mcoffee";
		$password = "";


		$db =  mysqli_connect($servername,$username,$password);


		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email =  $_POST['email'];
		$district = $_POST['district'];
		$province  = $_POST['province'];


		$querry =  "INSERT INTO `Order` (`name`, `phonenumber`, `emailaddress`, `district`, `province`) VALUES ('$name', '$phone', '$email', '$district', '$province')";

			if ($db->querry($querry)) {
				
				return true;
			}
			else {
				
				return $db->error;
			}
	}

	public function selectCustomer(){



		$servername = "localhost";
		$username = "Mcoffee";
		$password = "";


		$db =  mysqli_connect($servername,$username,$password);


		$querry = "SELECT `name`, `phonenumber`, `emailaddress`, `district`, `province` FROM `Order`";

		$result =  $db->querry($querry);
		return $result;


	} 




	// public function searchCustomer()
	// {

	// $servername = "localhost";
	// $username = "Mcoffee";
	// $password = "";

	// // $conn = mysqli_connect($servername, $username,$password);

	// $conn = mysqli_connect('localhost','root','','Mcoffee');



	// 	$sql = "SELECT * FROM `Order` WHERE name REGEXP '[x-z]'";

	// 	$result = $conn->querry($sql);

	// 	echo ($result);
	// 	// return $result;


	// }







	
}




  ?>