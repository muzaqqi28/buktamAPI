<?php

require "../connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $response = array();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $createdDate = $_POST['createdDate'];
    $cek = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_fetch_array(mysqli_query($connect, $cek));

    if(isset($result)){
        $response['value'] = 2;
        $response['message'] = 'username telah digunakan';
        echo json_encode($response);

    } else{
        $insert = "INSERT INTO users VALUE(NULL, '$email', '$password', '1', '$nama','1','$createdDate' )";
        if(mysqli_query($connect, $insert)){
            $response ['value'] = 1;
            $response ['message'] = "Berhasil didaftarkan";
            $response ['email'] = $email;
            $response ['nama'] = $nama;
            echo json_encode($response);

        }else{
            $response['value'] = 0;
            $response['message'] = "gagal didaftarkan";
            echo json_encode($response);
        }
    }
}

?>