<?php 
    include("../model/database.php");
    include("../model/products.php");
    function add_to_basket($id_product) {
        session_start();
        $basket = $_SESSION['basket'];
        $basket[] = get_products_by_id($id_product);

        $_SESSION['basket'] = $basket;
        header('Location: ../index.php');
    }

    $co = connect();
    $id = mysqli_real_escape_string($co, $_GET['id_prod']);
    mysqli_close($co);
    add_to_basket($id);
?>