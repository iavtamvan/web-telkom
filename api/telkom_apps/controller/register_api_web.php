<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 10/16/2018
 * Time: 5:52 AM
 */

include 'config.php';

if ($_POST) {
    $nama_user = $_POST['nama_user'];
    $wilayah_user = $_POST['wilayah_user'];
    $no_hp_user = $_POST['no_hp_user'];
    $username = $_POST['username_user'];
    $password = $_POST['password_user'];

    $queryInsert = mysqli_query($db, "Insert into user_apps (nama_user, wilayah_user, no_hp_user, username_user, password_user, rule, status_user) 
VALUE ('$nama_user', '$wilayah_user', '$no_hp_user', '$username', '$password', 'Teknisi', 'Aktif')");

    if ($queryInsert){
        $responses["error_msg"] = "Daftar berhasil! Silahkan login";

        echo json_encode($responses);
        header('Location: ../../../234652364!21273$&5632547.php');

    } else{

        $responses["error_msg"] = "Daftar gagal!";

        echo json_encode($responses);
    }

} else {

    $responses["error_msg"] = "404 beraer";

    echo json_encode($responses);
}
?>