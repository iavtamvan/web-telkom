<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 10/16/2018
 * Time: 5:33 AM
 */
session_start();
include 'config.php';

if ($_POST) {
    $username = $_POST['username_user'];
    $password = $_POST['password_user'];


    $queryLogin = mysqli_query($db, "Select * from user_apps where username_user='$username' and password_user='$password'");
    $ambilData = mysqli_fetch_assoc($queryLogin);
    $num = mysqli_num_rows($queryLogin);
    $rule = "".$ambilData['rule'];
    if ($num > 0) {
        if ($rule == "Regional"){
            $_SESSION["id_user"] = "" . $ambilData['id_user'];;
            $_SESSION["nama_user"] = "" . $ambilData['nama_user'];;
            $_SESSION["wilayah_user"] = "" . $ambilData['wilayah_user'];;
            $_SESSION["no_hp_user"] = "" . $ambilData['no_hp_user'];;
            $_SESSION["username"] = $username;


//        header('Location: ../../../pages/forms/caption_all.php');
            header('Location: ../../../234652364!21273$&5632547.php');
        } elseif ($rule == "Wilayah"){
            $_SESSION["id_user"] = "" . $ambilData['id_user'];;
            $_SESSION["nama_user"] = "" . $ambilData['nama_user'];;
            $_SESSION["wilayah_user"] = "" . $ambilData['wilayah_user'];;
            $_SESSION["no_hp_user"] = "" . $ambilData['no_hp_user'];;
            $_SESSION["username"] = $username;
            header('Location: ../../../pages/tables/data_user_wilayah.php');
        }
        else{
            $responses["error_msg"] = "Login gagal";

            echo json_encode($responses);
        }
    } else{
        $responses["error_msg"] = "Login gagal";

        echo json_encode($responses);
    }






} else {

    $responses["error_msg"] = "404 beraer";

    echo json_encode($responses);
}
?>