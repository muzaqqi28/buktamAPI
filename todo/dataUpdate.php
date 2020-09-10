<?php
include '../connect.php';

$todo_id = $_POST['todo_id'];

$cek ="SELECT * FROM todo WHERE todo_id = '$todo_id'";
$result = mysqli_fetch_array(mysqli_query($connect, $cek));

if(isset($result)){
	$response['message'] = "login berhasil";

	$response['todo_who'] = $result['kepada'];
	$response['todo_nama'] = $result['todo_nama'];
	$response['todo_organisasi'] = $result['todo_organisasi'];
	$response['todo_phone'] = $result['todo_phone'];
	$response['todo_email'] = $result['todo_email'];
	$response['todo_scedule'] = $result['todo_scedule'];
	$response['todo_keterangan'] = $result['todo_keterangan'];

	echo json_encode($response);

} else{

		$response['value'] = 0;
		$response['message'] = "login gagal";
		echo json_encode($response);
	}

?>
