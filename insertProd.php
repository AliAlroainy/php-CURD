<?php 
include('connection.php');

$id = $_POST['id'];
$cname = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];


$sql = "INSERT INTO prodcuts (id,name ,cate,price ) VALUES ('$id','$cname','$category ','$price')";

if ( $con->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";

    
} else {
    echo "حدث خطا " . $sql . "<br>" . $con->error;
}
 $con->close();
?>