<?php
    // if the user isn't logged
    if(!isset($_COOKIE["logged"])) {
        header("location:login.php");
    }

    require_once "connection/conn.php";

    session_start();

    $months = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

    //Return without the left zero if exists
    function HasZeroValue($n) {
        $s = $n . "";

        if($s[0] == "0") {
            return intval($s[1]);
        } else {
            return $n;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Gabriel Victor">
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
    
        <title>Cyber Redes - perfil</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/profile.css">
    </head>
    <body>
        <?php
            require_once("includes/menu.php");
        ?>

        <div id="interface">
            <!-- logo -->
            <img src="images/logo.png" id="logo">

            <!-- left content (profile info)-->
            <div id="left-content">
                <img src="images/no-profile.png" alt="" id="profile-image">

                <?php
                    echo '<h1 id="user-name">' . $_SESSION["name"] . '</h1>';
                ?>

                <button id="delete-account">Deletar conta</button>
                <button id="logout-button">Sair</button>
            </div>

            <!-- right content (table)-->
            <div id="right-content">
                <h1>Agendamentos</h1>

                <table>
                    <!-- title -->
                    <tr id="titles">
                        <td>Setor</td>
                        <td>Horario</td>
                        <td>Dia</td>
                        <td>Mês</td>
                    </tr>

                    <!-- items -->
                    <?php
                        $query = "SELECT * FROM agendamentos WHERE user_id='" . $_SESSION["id"] . "';";
                        $result = mysqli_query($conn, $query);

                        if($result) {
                            if(mysqli_num_rows($result) > 0) { 

                                while($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr class="item" onclick="cancelar(' . $row["id"] . ')" id="' . $row["id"] . '">' . 
                                            '<td>' . $row["setor"] . '</td>' . 
                                            '<td>' . $row["horario"] . ':00hrs</td>' . 
                                            '<td>' . $row["dia"] . '</td>' . 
                                            '<td>' . $months[HasZeroValue($row["mes"]) - 1] . '</td>' . 
                                        '</tr>';
                                }
                            }
                        }
                    ?>
                </table>

                <!-- buttons -->
                <div id="buttons">
                    <button id="profile-agendar">Agendar</button>
                    <button id="agendar-delete">Deletar</button>
                </div>

                <div id="agendar-content">
                    <a id="title">Agendar</a>
                    <form id="form-agendar" action="connection/agendar.php" method="post">

                        <!-- setor -->
                        <label for="setor">Setor: </label>
                        <select id="setor" name="setor">
                            <option value="hardware">Hardware</option>
                            <option value="software">software</option>
                        </select>

                        <!-- horario -->
                        <label for="horario">Horario: </label>
                        <select id="horario" name="horario">
                            <?php
                                for($i = 8; $i <= 19; $i++) {
                                    echo '<option value="' . $i . '">' . $i . ':00</option>';
                                }
                            ?>
                        </select>

                        <!-- dia -->
                        <label for="dia">Dia: </label>
                        <select id="dia" name="dia">
                            <?php
                                for($i = 1; $i <= 30; $i++) {
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                            ?>                                                     
                        </select>

                        <!-- mes -->
                        <label for="mes">Mês: </label>
                        <select id="mes" name="mes">
                            <?php
                                $currentMonth = date('m');
                                $monthName = date('F', mktime(0, 0, 0, $currentMonth, 10));
                                echo '<option value="' . $currentMonth . '">' . $months[HasZeroValue($currentMonth) - 1] . '</option>';

                                $nextMonth = date('m') + 1;
                                $monthName = date('F', mktime(0, 0, 0, $nextMonth, 10));
                                echo '<option value="' . $nextMonth . '">' . $months[HasZeroValue($nextMonth) - 1] . '</option>';
                            ?>
                        </select>
                    </form>

                    <!-- submit -->
                    <div id="agendar-buttons">
                        <button id="agendar-comfirm">Ok</button>
                        <button id="agendar-cancel">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- scripts -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/profile.js"></script>
        <script src="js/menu.js"></script>
    </body>
</html>