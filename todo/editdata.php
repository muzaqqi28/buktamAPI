<?php

	include '../connect.php';
	
	
	$todo_id = $_POST['todo_id'];
	$todo_who = $_POST['todo_who'];
	$todo_nama = $_POST['todo_nama'];
    $todo_organisasi= $_POST['todo_organisasi'];
    $todo_phone= $_POST['todo_phone'];
	$todo_email= $_POST['todo_email'];
	$todo_scedule = $_POST['todo_scedule'];
	$todo_keterangan= $_POST['todo_keterangan'];
	
	$connect->query("UPDATE todo SET 
	kepada='$todo_who', 
	todo_nama='$todo_nama', 
	todo_organisasi='$todo_organisasi', 
	todo_phone='$todo_phone',
	todo_email='$todo_email', 
	todo_scedule='$todo_scedule',
	todo_keterangan='$todo_keterangan'
	WHERE todo_id='$todo_id'");
	if (isset($connect)) {
		$response['message'] = 'Edit Berhasil';
        echo json_encode($response);
	} else {
		$response['message'] = 'Edit Gagal';
        echo json_encode($response);
	}
	
?>