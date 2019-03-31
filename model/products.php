<?php
    require_once('database.php');

    function get_category_by_id($name) {
        $co = connect();
        $req = "SELECT id_cat FROM categories WHERE name_cat = '$name'";
        $res = mysqli_query($co, $req);
        $id = mysqli_fetch_array($res, MYSQLI_NUM)[0];
        return ($id);
    }

    function get_products() {
        $co = connect();
        $req = "SELECT * FROM product";
        $res = mysqli_query($co, $req);
        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
            $rows[] = $row;
        mysqli_close($co);
        return ($rows);
    }

    function get_products_by_id($id_prod) {
        $co = connect();
        $req = "SELECT * FROM product WHERE id_prod = '$id_prod'";
        $res = mysqli_query($co, $req);
        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
            $rows[] = $row;
        mysqli_close($co);
        return ($rows);
    }
?>