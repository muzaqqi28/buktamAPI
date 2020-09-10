<?php

	include '../connect.php';
	
	$todo_id = $_POST['todo_id'];
	$todo_scedule = $_POST['todo_scedule'];
	$todo_jawaban= $_POST['todo_jawaban'];
	
	$connect->query("UPDATE todo SET 
	todo_scedule='$todo_scedule',
	todo_jawaban='$todo_jawaban'
	WHERE todo_id='$todo_id'");
	if (isset($connect)) {
		$response['message'] = 'Edit Karyawan Berhasil';
        echo json_encode($response);
	} else {
		$response['message'] = 'Edit Karyawan Gagal';
        echo json_encode($response);
	}
	
?>