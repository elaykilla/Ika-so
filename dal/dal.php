<?php
	
	 class atom 
   { 
        private $id = NULL;

        public function set_atom($value)
        {
            $this->id = $value;   
        }

        public function get_atom()
        {
            return $this->id;
        }
    }

  



	class item
	{
		const DB_HOST = 'localhost';
		const DB_NAME = 'ikaso';
		const DB_USER = 'root';
		const DB_PASSWORD = 'root';

		private $conn = null;

		/**
		 * Open the database connection
		 */
		public function __construct()
		{
			// open database connection
			$connectionString = sprintf("mysql:host=%s;dbname=%s;charset=utf8",
				item::DB_HOST,
				item::DB_NAME);

			try 
			{
				$this->conn = new PDO($connectionString,
					item::DB_USER,
					item::DB_PASSWORD);
				//for prior PHP 5.3.6
				//$conn->exec("set names utf8");

			} 
			catch (PDOException $pe) 
			{
				die($pe->getMessage());
			}
		}

		/**
		 * insert blob into the files table
		 * @param string $filePath
		 * @param string $mime mimetype
		 */
		public function insert($login, $type, $label, $city, $commune, $district, $room_num, $bath_num, $kitchen_num, $description, $price, $c_date, $time, $r_date)
		{	//die('back here again');
			
		
			$sql = "INSERT INTO offer (c_id, label, type, city, com, dist, 
										room_num, bath_num, kitchen_num, description, price, cr_date, date, ready_date)
						VALUES ('".$login."', '".$type."', '".$label."', '".$city."', 
							'".$commune."', '".$district."', '".$room_num."', 
							'".$bath_num."', '".$kitchen_num."', '".$description."', 
							'".$price."', '".$c_date."', '".$time."', '".$r_date."')";

			$stmt = $this->conn->prepare($sql);
			return $stmt->execute();

		}

		public function update($id, $type, $label, $city, $commune, $district, $room_num, $bath_num, $kitchen_num, $description, $price, $c_date, $r_date)
		{	//die('back here again');
			
			$sql = "UPDATE offer 
					SET description = :description, label = :label, type = :type, city = :city,  com = :commune,  dist = :district, room_num = :room_num,  bath_num = :bath_num,  kitchen_num = :kitchen_num,  price = :price, cr_date = :c_date, ready_date = :r_date
					Where id = ".$id."";

			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':city',$city); $stmt->bindParam(':type',$type);  $stmt->bindParam(':label',$label); 
			$stmt->bindParam(':district',$district); $stmt->bindParam(':commune',$commune);  
			$stmt->bindParam(':bath_num',$bath_num); $stmt->bindParam(':room_num',$room_num); 
			$stmt->bindParam(':description',$description);  $stmt->bindParam(':kitchen_num',$kitchen_num);
			$stmt->bindParam(':price',$price); $stmt->bindParam(':c_date',$c_date); $stmt->bindParam(':r_date',$r_date);

			return $stmt->execute() or die('bitch');

		}

		public function select($value) 
		{
			$sql = "SELECT id, login
					FROM users
					WHERE login = :value";

			$stmt = $this->conn->prepare($sql);
			$stmt->execute(array(":value" => $value));
			$stmt->bindColumn(1, $id);
			$stmt->bindColumn(2, $login);

			$stmt->fetch(PDO::FETCH_BOUND);

			return array("id" => $id,
				"login" => $login);

		}

		public function blitz($value) 
		{
			$sql = "SELECT id, label, description 
					FROM offer 
					WHERE label
					LIKE '%".$value."%'";

			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$stmt->execute(array(":value" => $value));
			$stmt->bindColumn(1, $id);
			$stmt->bindColumn(2, $label);
			$stmt->bindColumn(3, $desc);

			$stmt->fetch(PDO::FETCH_BOUND);

			return array("id" => $id, "label" => $label, "desc" => $desc);
			//die("</br>here : ".$id." label : ".$label." desc ".$desc);

		}

		public function blitz_row($value)
		{
 			$sql = "SELECT id, label, description 
					FROM offer 
					WHERE label
					LIKE '%".$value."%'";

			//$stmt->execute(array(":value" => $value));
				$req = $this->conn->query($sql);
				//$req->query($sql);
				return $req->rowCount();
		}

		public function fetch_row($value)
		{
 			$sql = "SELECT login
					FROM users
					WHERE login = '".$value."'";

			//$stmt->execute(array(":value" => $value));
				$req = $this->conn->query($sql);
				//$req->query($sql);
				return $req->rowCount();
		}

		/**
		 * close the database connection
		 */
		public function __destruct() 
		{
			// close the database connection
			$this->conn = null;
		}
	}

function exact($DateAnnonce)
{
	$date='Unknown time';
	$DateActuel=time();
	$resultat=$DateActuel-$DateAnnonce;
	if ($resultat < 10)
        {
        $date = 'Right now';
        }
        else if ($resultat < 60)
        {
        $date = $resultat.' Second(s) ago';
        }
        else if ($resultat < 3600)
	{
	$minute=(int)($resultat/60);
	$date=$minute.' Minute(s) ago';
	}
	else if($resultat<86400)
	{
	$heure=(int)($resultat/3600);
	$date=$heure.' Hour(s) Ago';
	}
	else if($resultat<172800)
	{
	$date='Yesterday';
	}
	else if($resultat<604800)
	{
	$jour=(int)($resultat/86400);
	$date= $jour.' Day(s) ago';
	}
	else if($resultat<2419200)
	{
	$semaine=(int)($resultat/604800);
	$date= $semaine.' Week(s) ago';
	}
	else if($resultat<29039400)
	{
	$mois=(int)($resultat/2419200);
	$date= $mois.' Month(s) ago';
	}
	return $date;
}


	if (isset($_POST['log_in'])) 
	{
		$log_in = new item();
		$check = $log_in->select($_POST['login']);
		$row = $log_in->fetch_row($_POST['login']);
		
		if($row != 0)
		{
			//die('Login id :'.$check['id']);
			session_start();
			$_SESSION['id'] = $check['id'];
			$_SESSION['login']= $check['login'];
		}
		else
		{
			
		}
		
	}
		
		
		
	
	

	?>



 		 







								