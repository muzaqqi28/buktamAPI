<?php

require "../connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $response = array();
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $cek = "SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = mysqli_fetch_array(mysqli_query($connect, $cek));

    if(isset($result)){
        $response['value'] = 1;
        $response['level'] = $result['level'];
        $response['message'] = 'Login Berhasil';
        $response['email'] = $result['email'];
        $response['nama'] = $result['nama'];
        $response['id'] = $result['id'];
        echo json_encode($response);

    } else{
    
            $response['value'] = 0;
            $response['message'] = "login gagal";
            echo json_encode($response);
        }
    }


?>