<?php
	//connection
	$conn = new mysqli('localhost', 'root', '', 'pretest');

	$data = array();
	$sql = "SELECT * FROM tbl_soal";
	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
		$data[] = $row; 
	}

	//convert to json
	$data = json_encode($data);

	//create json file
	$filename = 'soal.json';
	if(file_put_contents($filename, $data)){
		echo 'Json file created';
		header("location: menu.html");

	} 
	else{
		echo 'An error occured in creating the file';
	}

?>