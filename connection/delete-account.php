<?php
    // if the user isn't logged
    if(!isset($_COOKIE["logged"])) {
        header("location:login.php");
    }

    require_once "conn.php";

    session_start();
    $id = $_SESSION["id"];

    // deleta todos os agendamentos
    $query = "DELETE FROM agendamentos WHERE user_id='$id'";
    $result = mysqli_query($conn, $query);

    $query = "DELETE FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if($result) {
        header("location:logout.php");
    } else {
        echo 'failed';
        echo mysqli_errno($conn);
    }
?>