<?php 
  
    $conx = mysql_connect('localhost', 'root', 'root')
        or die("bye");
      mysql_select_db("ikaso") or die ("hello");
    if(isset($_POST['reselect_id']))
  {
    $folder = $_POST['reselect_id'];
  }
  else {
    $folder = $_POST['selected_id'];
  }

  $row_query = mysql_query("SELECT * FROM photo WHERE offer_id='".$folder."'");
  $row = mysql_fetch_array($row_query);



if(isset($_POST['submit_1']))
	{  
    // to be replaced by the value of the cookie containing the offer ID

		if ($_FILES["file"]["error"] > 0)
  		{
  				die( "Error: " . $_FILES["file"]["error"] . "<br />");
  		}
		else
  		{
  			
  		}
  			
  			//Verification
  		$allowedExts = array("JPG", "JPEG", "GIF", "PNG");
		$extension = end(explode(".", $_FILES["file"]["name"]));
		
		if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg"))
		&& ($_FILES["file"]["size"] < 2000000))
 		{
 			 if ($_FILES["file"]["error"] > 0)
   			 {
   				 die( "Error: " . $_FILES["file"]["error"] . "<br />");
   			 }
  			else
   			 {  
   					//echo "</br></br>Upload: " . $_FILES["file"]["name"] . "<br />";
   				 	//echo "Type: " . $_FILES["file"]["type"] . "<br />";
   				 	//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
   				 	//echo "Stored in: " . $_FILES["file"]["tmp_name"];
   			 }
 		}
		else
 		{
 		
 		}
 		 
 		 //upload
 		$allowedExts = array("JPG", "JPEG", "GIF", "PNG");
		$extension = end(explode(".", $_FILES["file"]["name"]));
		
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/jpg"))
		&& ($_FILES["file"]["size"] < 2000000))
  		{
  			if ($_FILES["file"]["error"] > 0)
    		{
    			die("Return Code: " . $_FILES["file"]["error"] . "<br />");
    		}
  			else
    		{
    			//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    			//echo "Type: " . $_FILES["file"]["type"] . "<br />";
    			//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    			//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
          $search_label = mysql_query("SELECT * FROM offer WHERE id='".$folder."'");
          
          while($offer_label = mysql_fetch_array($search_label))
         {
    			
      			move_uploaded_file("/assets/user/".$_SESSION['login']."/".$folder."/".$offer_label['label']."1.".$extension) ;
          }
      				//echo "Stored in hello: " . "images/" . $_FILES["file"]["name"];
      				echo"Le fichier a ete bien enregistrer";
      			//$insert = "INSERT INTO pictures (owner, name, time)
				//			VALUES ('".$login."', '".$_FILES["file"]["name"]."', '".time()."')";
				
				//$add_pic = @mysql_query($insert) or
				// die("<font color=\"red\"> NOT THIS TIME MOTHERFUCKER </font>");
				
      			
    		}
 		 }
		else
  		{
  			die( "<br><font color=\"red\">Invalid file</font>");
  		}
  	}

?>
						