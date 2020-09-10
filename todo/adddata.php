<?php

	include '../connect.php';
	
	
	$id_user = $_POST['id_user'];
	$todo_title = $_POST['todo_title'];
	$todo_who= $_POST['todo_who'];
	$todo_date= $_POST['todo_date'];
	$todo_time = $_POST['todo_time'];
	
	
	$connectIn = "INSERT INTO `todotes`(`todo_id`, `id_user`, `todo_title`, `todo_who`, `todo_date`, `todo_time`) VALUES (NULL,'".$id_user."','".$todo_title."','".$todo_who."','".$todo_date."','".$todo_time."')";


	$insert = "INSERT INTO todo ('todo_id', 'id_user', 'todo_title', 'todo_who', 'todo_date', 'todo_time') VALUES ('NULL','".$id_user."','".$todo_title."','".$todo_who."','".$todo_date."','".$todo_time."')";
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