<?php
    session_start();
    session_save_path('/');
    
    require_once("conn.php");

    // get the values from the form
    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $email = isset($_POST["email"]) ? $_POST["email"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;
    $comfirmPassword = isset($_POST["comfirm-password"]) ? $_POST["comfirm-password"] : null;

    //verify if the input is null
    if($name == null) {
        
    } else if($email == null){
        
    } else if($password == null || $comfirmPassword == null) {

    }

    //encrypt password
    $password = md5($password);
    $comfirmPassword = md5($comfirmPassword);

    //inserting the data
    $query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password');";
    $result = mysqli_query($conn, $query);

    if(result) {
        $query = "SELECT * FROM usuarios WHERE email='$email'";
        $result = mysqli_query($conn, $query);

        //return a array with all values of current row
        $row = mysqli_fetch_row($result);
   
        $_SESSION["id"] = $row[0];
        $_SESSION["name"] = $row[1];

        setcookie("logged", "1", time()+60*60*24*365, "/");
        $_COOKIE["logged"] = "1";

        header("location:../index.php");
    }
?>