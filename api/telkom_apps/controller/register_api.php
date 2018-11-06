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
    $datel_user = $_POST['datel_user'];
    $no_hp_user = $_POST['no_hp_user'];
    $username = $_POST['username_user'];
    $password = $_POST['password_user'];

    $queryInsert = mysqli_query($db, "Insert into user_apps (nama_user, wilayah_user, datel_user, no_hp_user, username_user, password_user, rule, status_user) 
VALUE ('$nama_user', '$wilayah_user', '$datel_user','$no_hp_user', '$username', '$password', 'Teknisi', 'Aktif')");

    if ($queryInsert){
        $querryIdUser = mysqli_query($db, "SELECT * from user_apps where username_user = '$username'");
        $pisahkanID = mysqli_fetch_assoc($querryIdUser);
        $ambilIDUser = "".$pisahkanID['is_user'];
        $responses["error_msg"] = "Register berhasil! Silahkan login";
        $responses["id_user"] = $ambilIDUser;
        echo json_encode($responses);

    } else{

        $responses["error_msg"] = "Register gagal!";

        echo json_encode($responses);
    }

} else {

    $responses["error_msg"] = "404 beraer";

    echo json_encode($responses);
}
?>