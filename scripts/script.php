<?php 
		
	$connection = mysqli_connect("sh-europe120.banahosting.com","obvzudpy_usrapp","","160582pablos", "obvzudpy_wapp");



	$id = $_GET["id"];

	$query = "SELECT * FROM `my_data` WHERE id BETWEEN (id+0) and (id+18) LIMIT 0, 18";

	$result = mysqli_query($connection,$query);

	while ($row = mysqli_fetch_assoc($result)) {
			
		$array[] = $row;	
	}

	header('Content-Type:Application/json');
	echo json_encode($array);
  
 ?>
