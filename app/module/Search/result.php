<?php

if(isset($_POST['search']))
{
	$conx = mysql_connect('localhost', 'root', 'root')
				or die("bye");
			mysql_select_db("ikaso") or die ("hello");

	$test = 2;

	$row_query = mysql_query("SELECT * FROM offer WHERE label LIKE '%".$_POST['search']."%'");
	$row = mysql_fetch_array($row_query);
}

//if(isset($_POST['search']))
//{	
//		$search = new item();
		
//		$row = $search->blitz_row($_POST['search']);
		
//		if($row != 0)
//		{
//			$blitz_found=TRUE;
//		}
//		else
//		{
			
//		}
//}




?>