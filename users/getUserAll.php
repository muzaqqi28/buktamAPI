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

$connect->close();
?>