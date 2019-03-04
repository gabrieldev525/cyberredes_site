<?php
    // if the user isn't logged
    if(!isset($_COOKIE["logged"])) {
        header("location:login.php");
    }

    require_once "conn.php";

    session_start();

    $index = isset($_POST['index']) ? $_POST['index'] : null;

    $split = explode(";", $index);

    for($i = 0; $i < count($split) - 1; $i++) {
        $query = "DELETE FROM agendamentos WHERE id='" . $split[$i] . "';";
        $result = mysqli_query($conn, $query);
    }

    header("location:../profile.php");
?>