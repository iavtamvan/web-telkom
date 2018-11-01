<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 10/16/2018
 * Time: 5:33 AM
 */

include 'config.php';

if ($_POST) {
    $username = $_POST['username_user'];
    $password = $_POST['password_user'];


    $queryLogin = mysqli_query($db, "Select * from user_apps where username_user='$username' and password_user='$password'");
    $ambilData = mysqli_fetch_assoc($queryLogin);
    $num = mysqli_num_rows($queryLogin);
    $rule = "".$ambilData['rule'];

    if ($num > 0) {
        $responses["error_msg"] = "Login berhasil";
        $responses["id_user"] = "" . $ambilData['id_user'];
        $responses["nama_user"] = "" . $ambilData['nama_user'];
        $responses["wilayah_user"] = "" . $ambilData['wilayah_user'];
        $responses["no_hp_user"] = "" . $ambilData['no_hp_user'];
        $responses["username"] = $username;

        echo json_encode($responses);
    } else {
        $responses["error_msg"] = "Login gagal";

        echo json_encode($responses);
    }





} else {

    $responses["error_msg"] = "404 beraer";

    echo json_encode($responses);
}
?>