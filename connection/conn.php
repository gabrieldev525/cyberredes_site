<?php
    $my_host = "localhost";
    $my_user = "root";
    $my_password = "";
    $my_db = "cyberredes";


    $conn = mysqli_connect($my_host, $my_user, $my_password) or die("failed to connect!");
    
    //create the database
    $query = "CREATE DATABASE IF NOT EXISTS $my_db;";
    $result = mysqli_query($conn, $query);

    //using the database created
    $conn = mysqli_connect($my_host, $my_user, $my_password, $my_db) or die("failed to connect!");

    //create the table
    $query = "CREATE TABLE IF NOT EXISTS users(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT," . 
                "name VARCHAR(50) NOT NULL," . 
                "email VARCHAR(100) NOT NULL," . 
                "password VARCHAR(100) NOT NULL);";
    $result = mysqli_query($conn, $query);

    // create the agendamento table
    $query = "CREATE TABLE IF NOT EXISTS agendamentos(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT," . 
                "setor VARCHAR(30) NOT NULL," . 
                "horario VARCHAR(10) NOT NULL," . 
                "dia VARCHAR(2) NOT NULL," . 
                "mes VARCHAR(15) NOT NULL," . 
                "user_id INT NOT NULL," .
                "CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users(id));";
    $result = mysqli_query($conn, $query);
?>