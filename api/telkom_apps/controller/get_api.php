<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 10/17/2018
 * Time: 6:41 PM
 */

include "config.php";

if ($_POST){
    $pindah = $_POST['pindah'];

    switch ($pindah){
        case "getCaption":
            $queryGetData = mysqli_query($db, "Select * from caption_apps");
            $ambilData = mysqli_fetch_assoc($queryGetData);
            $responses["error_msg"] = "".$ambilData['caption'];
            echo json_encode($responses);
            break;
    }
} else{;
    $responses["error_msg"] = "404 beraer";
    echo json_encode($responses);
}
?>