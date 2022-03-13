<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "cate";

$con = new mysqli($server,$user,$pass,$db);



?>

<?php

class Database{
	
	private $connection;

	function __construct()
	{
		$this->connect_db();
	}

	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'cate');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}

	public function create($fname,$lname,$email,$gender,$age){
		$sql = "INSERT INTO `crud` (first_name, last_name, email_id, gender, age) VALUES ('$fname', '$lname', '$email', '$gender', '$age')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}

	public function read($id=null){
		$sql = "SELECT * FROM `crud`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function update($fname,$lname,$email,$gender,$age, $id){
		$sql = "UPDATE `crud` SET first_name='$fname', last_name='$lname', email='$email', gender='$gender', age='$age' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$sql = "DELETE FROM `crud` WHERE id=$id";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}

	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}

}

$database = new Database();

?>