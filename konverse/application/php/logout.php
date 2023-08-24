<?php
    session_start();
    if(isset($_SESSION["unique_id"])) {
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET["logout_id"]);
        if(isset($logout_id)) {
            session_unset();
            session_destroy();
            header("location: ../pages/login.php");
        } else {
            header("location: ../pages/users.php");
        }
    } else {
        header("location: ../pages/login.php");
    }
?>