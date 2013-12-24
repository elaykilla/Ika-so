<?php
 if(isset($_POST['register']))
 {
 	$conx = mysql_connect('localhost', 'root', 'root')
				or die("bye");
			mysql_select_db("ikaso") or die ("hello");

		$login = $_POST['login'];
		$last = $_POST['lastname'];
		$first = $_POST['firstname'];
		$pwd = $_POST['pwd'];
		$pwd_ok = $_POST['pwd_ok'];
		$mail = $_POST['mail'];
		$pwd_check = false;

		$login_query = mysql_query("SELECT * FROM users WHERE login='$login'");

		if ($login_query != NULL)
		{
			$login_error="exist";}
		
		if($pwd == $pwd_ok && $pwd != "")
		{
			$pwd_check = true;
		}

		if ($login_query == NULL && $pwd_check == true)
		{
			$insert = "INSERT INTO users (login, pwd, first_n, last_n, mail)
						VALUES ('".$login."', '".$pwd."', '".$last."', '".$first."', '".$mail."')";
			$add_user = @mysql_query($insert);
		}
		


					/*setcookie("login", $login, time()+360000);
					setcookie("pass", $pass, time()+360000);
					echo"Login: ".$login."</br>Pass: ".$login."</br>";
					echo"Login: ".$_COOKIE["login"]."</br>Pass: ".$_COOKIE["pass"]."</br>";
					header('Location: profile.php') or die("no redirect cause i'm a little bitch");	*/
 }
?>