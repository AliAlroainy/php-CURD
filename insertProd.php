<?php 
// include('connection.php');

// $id = $_POST['id'];
// $cname = $_POST['name'];
// $category = $_POST['category'];
// $price = $_POST['price'];


// $sql = "INSERT INTO prodcuts (id,name ,cate,price ) VALUES ('$id','$cname','$category ','$price')";

// if ( $con->query($sql) === TRUE) {
//     echo "تم الادخال بنجاح";

    
// } else {
//     echo "حدث خطا " . $sql . "<br>" . $con->error;
// }
//  $con->close();



 require_once('connection.php');
 if(isset($_POST) & !empty($_POST)){
   
    $pname = $database->sanitize($_POST['name']);
    $pprice = $database->sanitize($_POST['price']);
    $pcate = $database->sanitize($_POST['category']);
    $pid = $_POST['id'];
	 
	 $res = $database->create($pname, $pprice, $pcate,$pid);
	 if($res){
	 	echo "Successfully inserted product";
	 }else{
	 	echo "failed to insert product";
	 }
}

?>