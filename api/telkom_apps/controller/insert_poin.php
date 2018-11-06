<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 10/26/2018
 * Time: 10:52 PM
 */
include 'config.php';

if ($_POST){
    $iduser = $_POST['id_user'];
    $sosmed_name = $_POST['sosmed_name'];

    $queryInsert = mysqli_query($db, "INSERT INTO `telkom_apps`.`bukti_transaksi_user` (`id_user`, `point_user`, `sosmed_name`) VALUES ('$iduser', '1', '$sosmed_name');");

    $sumPoint = mysqli_query($db, "SELECT SUM(point_user) AS total_point FROM bukti_transaksi_user WHERE id_user = '$iduser';");
    $ambilSum = mysqli_fetch_assoc($sumPoint);
    $ambilSumTotal = "".$ambilSum['total_point'];

    $updateUser = mysqli_query($db, "update user_apps set total_point = '$ambilSumTotal' where id_user = '$iduser'");

    $response["total_point"] = $ambilSumTotal;
    echo json_encode($response);
} else{
    $response["total_point"] = "Error";

    echo json_encode($response);
}


?>