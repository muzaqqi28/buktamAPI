<?php

require "../connect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){

	$sql = "SELECT * FROM todo";
	$result = $connect->query($sql);

	$dataResult=array();
	while($fecthData=$result->fetch_assoc())
	{
		$dataResult[]=$fecthData;
	}
	echo json_encode($dataResult);
}
$connect->close();
?>