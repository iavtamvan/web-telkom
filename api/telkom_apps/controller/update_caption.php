<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 10/26/2018
 * Time: 9:13 PM
 */

include 'config.php';

if (isset($_POST)){
    $caption = $_POST['caption'];

    $queryUpdate = mysqli_query($db, "Update caption_apps set caption = '$caption' where id_caption = '1'");

    header('Location: ../../../pages/forms/caption_all.php');
} else{
    $response["error"] = "Error deleting user";
    echo json_encode($response);
}
?>