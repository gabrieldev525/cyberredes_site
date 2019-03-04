<?php
    // if the user isn't logged
    if(!isset($_COOKIE["logged"])) {
        header("location:login.php");
    }

    require_once "conn.php";

    session_start();

    $setor = isset($_POST['setor']) ? $_POST['setor'] : null;
    $horario = isset($_POST['horario']) ? $_POST['horario'] : null;
    $dia = isset($_POST['dia']) ? $_POST['dia'] : null;
    $mes = isset($_POST['mes']) ? $_POST['mes'] : null;

    // err to agendar
    if($setor == null || $horario == null || $dia == null || $mes == null) {

    }

    $query = "INSERT INTO agendamentos(setor, horario, dia, mes, user_id) VALUES ('$setor', '$horario', '$dia', '$mes', '" . $_SESSION['id'] . "');";
    $result = mysqli_query($conn, $query);

    if($result) {
        header("location:../profile.php");
    }
?>