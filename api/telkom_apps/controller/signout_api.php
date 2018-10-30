<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 10/27/2018
 * Time: 3:18 AM
 */
session_start();
session_unset();
session_destroy();

header('Location: ../../../pages/log/index.php');
?>