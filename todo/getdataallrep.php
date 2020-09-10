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
 
// if ($result->num_rows >=0) {
 
// 	 while($row[] = $result->fetch_assoc()) {
	 
// 	 $item = $row;
	 
// 	 $json = json_encode($item, JSON_NUMERIC_CHECK);
	 
//  }
 
// } else {
// 	$connect->close();
// }
// echo $json;
}
$connect->close();
?>