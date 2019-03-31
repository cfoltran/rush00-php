#!/usr/bin/php
<?php
    include ('model/database.php');
    $co = mysqli_connect("127.0.0.1", "root", "rushrush");
    if (!$co)
        die("An error occured 😥\n");
    $db_query = "CREATE DATABASE rushdb";
    if (mysqli_query($co, $db_query))
        echo "Database created 👌 \n";
    else
        echo "An error occured 😥\n";
    mysqli_close($co);
    
    $co = connect();
    $passwd = hash("whirlpool", 'pampata');
    $all_query = file_get_contents('./SQL/create_tab.sql');
    $all_query .= file_get_contents('./SQL/populate.sql');
    $all_query .= "INSERT INTO users VALUES(id_user, 'phil', 'pamp', 'pampata', '$passwd', 'ok', 2000);\n";
    $all_query .= "INSERT INTO users VALUES(id_user, 'phil', 'pamp', 'pampata', '$passwd', 'ok', 2000);";
    if (mysqli_multi_query($co, $all_query))
        echo "Create table successfully 👌 \n";
    else
        echo "An error occured 😥\n";
    mysqli_close($co);
?>