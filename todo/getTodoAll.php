<?php

require "../connect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$todo_who = $_POST['todo_who'];

	$sql = "SELECT * FROM todo WHERE kepada='$todo_who'";
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