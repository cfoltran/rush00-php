<?php 
    include("../model/database.php");
    include("../model/products.php");
    function del_to_basket($line) {
        session_start();
        $i = 0;
        foreach ($_SESSION['basket'] as $article) {
            if ($line == $i)
                unset($_SESSION['backet'][$i][0]);
            $i++;
        }
        header('Location: ../basket.php');
    }

    $co = connect();
    $line = mysqli_real_escape_string($co, $_GET['line']);
    del_to_basket($line);
?>