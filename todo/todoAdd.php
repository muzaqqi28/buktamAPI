<?php

    include '../connect.php';
    
	$todo_who = $_POST['todo_who'];
	$todo_nama = $_POST['todo_nama'];
    $todo_organisasi= $_POST['todo_organisasi'];
    $todo_phone= $_POST['todo_phone'];
	$todo_email= $_POST['todo_email'];
	$todo_scedule = $_POST['todo_scedule'];
	$todo_keterangan= $_POST['todo_keterangan'];
	$todo_date= $_POST['todo_date'];
	$todo_time = $_POST['todo_time'];
	
	$connectIn = "INSERT INTO `todo` (`todo_id`,`kepada`, `todo_nama`, `todo_organisasi`,`todo_phone`, `todo_foto`, `todo_email`, `todo_scedule`, `todo_keterangan`,`todo_jawaban`, `todo_date`, `todo_time`) 
    VALUES (NULL,'".$todo_who."','".$todo_nama."','".$todo_organisasi."','".$todo_phone."','NULL','".$todo_email."','".$todo_scedule."','".$todo_keterangan."','','".$todo_date."','".$todo_time."')";

	if(mysqli_query($connect, $connectIn))
	{
	    $response['value'] = "Berhasil Tambah Task";
	    echo json_encode($response);
	}
	else{
	    $response['value'] = "Gagal Tambah Task";
	    echo json_encode($response);
	}
?>