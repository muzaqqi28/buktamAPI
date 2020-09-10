<?php
	include '../connect.php';
	$id=$_POST['id'];
	$connect->query("DELETE FROM todo WHERE todo_id=".$id);
	if(isset($connect))
	{
		$response['message'] = 'Delete Berhasil';
		echo json_encode($response);
	}
	else
	{
		$response['message'] = 'Delete Gagal';
		echo json_encode($response);
	}

?>