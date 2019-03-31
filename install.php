#!/usr/bin/php
<?php
    include ('model/database.php');
    $con = mysqli_connect("localhost:3307", "root", "rushrush", "test");
    if (!$con)
        die("An error occured 😥\n");
    $db_query = "CREATE DATABASE rushdb";
    if (mysqli_query($con, $db_query))
        echo "Database created 👌 \n";
    else
        echo "An error occured 😥\n";
    mysqli_close($con);
    
    $con = connect();
    $passwd = hash("whirlpool", 'pampata');
    $all_query = file_get_contents('./SQL/create_tables.sql');
    $all_query .= file_get_contents('./SQL/populate.sql');
    $all_query .= "INSERT INTO users VALUES(id_user, 'phil', 'pamp', 'pampata', '$passwd', 'ok', 2000);\n";
    $all_query .= "INSERT INTO users VALUES(id_user, 'phil', 'pamp', 'pampata', '$passwd', 'ok', 2000);";
    if (mysqli_multi_query($con, $all_query))
        echo "Create table successfully 👌 \n";
    else
        echo "An error occured 😥\n";
    mysqli_close($con);
?>