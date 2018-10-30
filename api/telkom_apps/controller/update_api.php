<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 10/16/2018
 * Time: 6:04 AM
 */

include 'config.php';

if (isset($_GET)) {
    $pindah = $_GET['pindah'];

    switch ($pindah){
        case 'updateAkun':
            $id_user = $_GET['id_user'];
            $username = $_GET['username_user'];
            $password = $_GET['password_user'];

            $queryUpdate = mysqli_query($db, "Update user_apps set username_user ='$username', password_user='$password' WHERE id_user = '$id_user'");
            if ($queryUpdate){

                $responses["error_msg"] = "Update berhasil!";

                echo json_encode($responses);

            } else{

                $responses["error_msg"] = "Update gagal!";

                echo json_encode($responses);
            }
            break;

        case "updateCaption" :
            $captionNew = $_GET['caption'];
            $queryUpdateCaption = mysqli_query($db, "Update caption_apps set caption = '$captionNew'");
            if ($queryUpdateCaption){

                $responses["error_msg"] = "Update berhasil!";

                echo json_encode($responses);

            } else{

                $responses["error_msg"] = "Update gagal!";

                echo json_encode($responses);
            }
            break;
        case "updateUserNonaktif" :
            $idUser = $_GET['id_user'];
            $queryUpdateCaption = mysqli_query($db, "Update user_apps set status_user = 'Nonaktif' where id_user = '$idUser'");
            if ($queryUpdateCaption){

                header('Location: ../../../pages/tables/data_user.php');

            } else{

                $responses["error_msg"] = "Update gagal!";

                echo json_encode($responses);
            }
            break;
        case "updateUserAktif" :
            $idUser = $_GET['id_user'];
            $queryUpdateCaption = mysqli_query($db, "Update user_apps set status_user = 'Aktif' where id_user = '$idUser'");
            if ($queryUpdateCaption){

                header('Location: ../../../pages/tables/data_user.php');

            } else{

                $responses["error_msg"] = "Update gagal!";

                echo json_encode($responses);
            }
            break;

    }


} else{

    $responses["error_msg"] = "404 beraer!";

    echo json_encode($responses);
}
?>
