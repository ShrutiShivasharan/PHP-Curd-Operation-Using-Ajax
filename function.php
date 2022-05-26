<?php
include 'conn.php';

if ($_REQUEST['action']== 'updatedata') {

	$name= $_POST['username'];  
	$pws= $_POST['password'];
    $id= $_POST['id'];

	$sql="UPDATE `table` SET username='$name',password='$pws' where id=$id";

	$result=mysqli_query($con,$sql);

	if ($result) {
		 // echo "Updated";
		//header('location:display.php');
	}else{
		die(mysql_error($con));
	}

}

?>



<!-- if ($_SERVER["REQUEST_METHOD"] == "POST") {

 	$name= $_POST['username'];
 	$pws= $_POST['password'];

	$sql="INSERT INTO `table`(username, password) VALUES ('$name','$pws')";

 	$result=mysqli_query($con,$sql);

 	if ($result) {
        echo "Hello";
        header('location:display.php');
	}else{
        die(mysql_error($con));
	}
    echo "INSERT INTO `table`(username, password) VALUES ('$name','$pws')"; 
}
 -->
