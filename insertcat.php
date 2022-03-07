  <?php 

include('connection.php');


// $add = 'INSERT INTO categories (id,name) VALUES (`$_POST["id"]`,`$_POST["name"]`)';
// $result = mysql_query($con, $add); 

// if(isset($_POST['submit']))
// {    
// $id = $_POST['id'];
// $cname = $_POST['name'];
// //$mobile = $_POST['mobile'];
// $sql = "INSERT INTO categories (id,name )
// VALUES ('$id','$cname')";
// if (mysqli_query($con, $sql)) {
//     echo "New record has been added successfully !";
// } else {
//     echo "Error: " . $sql . ":-" . mysqli_error($con);
// }}

$id = $_POST['id'];
$cname = $_POST['name'];
//$mobile = $_POST['mobile'];

$sql = "INSERT INTO categories (id,name ) VALUES ('$id','$cname')";

if ( $con->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";

    
} else {
    echo "حدث خطا " . $sql . "<br>" . $con->error;
}
 $con->close();

?>