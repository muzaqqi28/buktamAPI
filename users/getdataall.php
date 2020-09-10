<?php

require "../connect.php";

    // $sql = "SELECT 'nama', 'email', 'password', 'createdDate' FROM users";
    $sql = "SELECT `level`,`nama` FROM users";
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
// 	echo "No Data";
// 	$json = json_encode($item, JSON_NUMERIC_CHECK);
// }
// echo $json;
$connect->close();

?>