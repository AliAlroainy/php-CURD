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

	public function create($pname,$pprice,$pcate,$pid){
		$sql = "INSERT INTO `prodcuts` (name, price, cate,id) VALUES ('$pname', '$pprice', '$pcate','$pid')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}

    public function createc($id,$cname){
		$sql = "INSERT INTO `categories` (id, name) VALUES ('$id', '$cname')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}


	public function readp($id=null){
		$sql = "SELECT * FROM `prodcuts`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

    public function readc($id=null){
		$sql = "SELECT * FROM `categories`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	// public function update($fname,$lname,$email,$gender,$age, $id){
	// 	$sql = "UPDATE `crud` SET first_name='$fname', last_name='$lname', email='$email', gender='$gender', age='$age' WHERE id=$id";
	// 	$res = mysqli_query($this->connection, $sql);
	// 	if($res){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

	// public function delete($id){
	// 	$sql = "DELETE FROM `crud` WHERE id=$id";
 	// 	$res = mysqli_query($this->connection, $sql);
 	// 	if($res){
 	// 		return true;
 	// 	}else{
 	// 		return false;
 	// 	}
	// }

	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}

}

$database = new Database();

?>