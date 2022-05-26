<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crud operations</title>
<!-- Bootstrap 4 CDN link -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<button class="btn btn-primary my-5"><a href="insert.php" class="text-light">Add User</a></button>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Sir.No</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
<?php

	$sql="select * from `table`";
	$result=mysqli_query($con,$sql);
	if ($result) {
		// $row=mysqli_fetch_assoc($result);
		// echo $row['username'];
		// $row=mysqli_fetch_assoc($result);
		// echo $row['username'];
		while ($row=mysqli_fetch_assoc($result)) {
			$id=$row['id'];
			$name=$row['username'];
			$pws=$row['password'];
			echo '<tr>
			      <th scope="row">'.$id.'</th>
			      <td>'.$name.'</td>
			      <td>'.$pws.'</td>
			    <td>
					<button class="btn btn-primary"><a href="Update.php?updateid='.$id.'" class=text-white>Update</a></button>
					<button class="btn btn-danger"><a href="Delete.php?deleteid='.$id.'" class=text-white>Dalete</a></button>
				</td>
				</tr>'
			      ;
		}
	}

?>
</tbody>
</table>
</div>
</body>
</html>