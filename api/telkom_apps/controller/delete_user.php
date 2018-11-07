<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 10/26/2018
 * Time: 9:13 PM
 */

include 'config.php';

if (isset($_GET)){
    $iduser = $_GET['id_user'];

    $queryDelete = mysqli_query($db, "delete from user_apps where id_user = '$iduser';");
    $queryDeletePoint = mysqli_query($db, "delete from bukti_transaksi_user where id_user = '$iduser';");

    header('Location: ../../../pages/tables/data_user.php');
} else{
    $response["error"] = "Error deleting user";
    echo json_encode($response);
}
?>