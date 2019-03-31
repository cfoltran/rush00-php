<?php 
    include("../model/database.php");
    
    function order($login, $id_prod, $price) {
        $co = connect();
        $req = "SELECT id_user FROM users WHERE login = '$login'";
        $res = mysqli_query($co, $req);
        $id = mysqli_fetch_array($res, MYSQLI_NUM)[0];
        $req = "INSERT INTO orders VALUES($id, $id_prod, 1)";
        $req = mysqli_query($co, $req);
        $req = "UPDATE users SET wallet = wallet - $price WHERE id_user = $id";
        $req = mysqli_query($co, $req);
    }
    session_start();
    $co = connect();
    $basket = $_SESSION['basket'];
    foreach ($basket as $article) {
        $stuff = $article[0];
        order($_SESSION['loggued_on_user'], $stuff['id_prod'], $stuff['price']);
    }
    mysqli_close($co);
?>