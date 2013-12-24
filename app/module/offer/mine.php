<?php
		$conx = mysql_connect('localhost', 'root', 'root')
				or die("bye");
			mysql_select_db("ikaso") or die ("hello");


	$row_query = mysql_query("SELECT * FROM offer WHERE c_id='".$_SESSION['id']."'");
	$row = mysql_fetch_array($row_query);

	

?>