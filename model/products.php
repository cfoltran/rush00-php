<?php
    require_once('database.php');
    function get_products() {
        $co = connect();
        $req = "SELECT * FROM product";
        $res = mysqli_query($co, $req);
        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
            $rows[] = $row;
        mysqli_close($co);
        return ($rows);
    }
?>