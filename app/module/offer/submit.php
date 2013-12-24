<?php
								if(isset($_POST['offer_choice']))
								{	
									if($_POST['offer_type'] == "apt")
									{
										$choice = "apt";
									}
									else if($_POST['offer_type'] == "house")
									{
										$choice = "house";
									}
									else if($_POST['offer_type'] == "bi")
									{
										$choice = "bi";
									}
									else if ($_POST['offer_type'] == "emp_field")
									{
										$choice = "emp_field";
									}
								}
								else
								{
									
								}

if(isset($_POST['send_offer']))
	{	
		
		$login 			= $_SESSION['id'];
		$label 			= $_POST['label'];
		$type 			= "test";
		$price			= $_POST['price'];
		$commune		= $_POST['com'];
		$city			= $_POST['city'];
		$district		= $_POST['district'];
		$room_num		= $_POST['room_num'];
		$bath 			= $_POST['bath'];
		$bath_num 		= $_POST['bath_num'];
		$kitchen 		= $_POST['kitchen'];
		$kitchen_num	= $_POST['kitchen_num'];
		$r_date 		= $_POST['r_date'];
		$c_date 		= $_POST['c_date'];
		$description 	= $_POST['description'];

		$insert = new item();
		$do = $insert->insert($login, $type, $label, $city, $commune, $district, $room_num, $bath_num, $kitchen_num, $description, $price, $c_date, time(), $r_date);


}



//	
//								if(isset($_POST['offer_choice']))
//								{	
//								if($_POST['offer_type'] == "apt" || $_POST['offer_type'] == "house" || $_POST['offer_type'] == "bi")
//									{
//									}
//									else if ($_POST['offer_type'] == "emp_field")
//									{
//										echo "Empty Field";
//									}
//								}
//								
								?>
