<?php
	include '../connect.php';
	$email=$_POST['email'];
	$con->query("DELETE FROM users WHERE email='$email'");
	if(isset($connect))
	{
        $connnect->query("DELETE FROM todo WHERE id_user='$email'");
		$response['message'] = 'Delete Berhasil';
		echo json_encode($response);
	}
	else
	{
		$response['message'] = 'Delete Gagal';
		echo json_encode($response);
	}

?>