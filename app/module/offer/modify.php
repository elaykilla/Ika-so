<?php

if(isset($_POST['modif_offer']) || isset($_POST['offer_modif']) )
	{
		$conx = mysql_connect('localhost', 'root', 'root')
				or die("bye");
			mysql_select_db("ikaso") or die ("hello");

		if(isset($_POST['offer_id']))
		{
			$temp_id = $_POST['offer_id'];
		}
		else
		{
			$temp_id = $_POST['selected_id'];
		}

		$row_query = mysql_query("SELECT * FROM offer WHERE id='".$temp_id."'");
		$row = mysql_fetch_array($row_query);

		if(isset($_POST['offer_modif']))
		{	
			$to_modif = new item();

			$verify = $to_modif->update($temp_id, $_POST['offer_type'], $_POST['label'], 
				$_POST['city'], $_POST['commune'], $_POST['district'], $_POST['room_num'], $_POST['bath_num'], 
				$_POST['kitchen_num'], $_POST['description'], $_POST['price'], $_POST['c_date'], $_POST['r_date']); 
			$modified = TRUE;
		}
	}


?>