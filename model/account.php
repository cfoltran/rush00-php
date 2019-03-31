<?php 
    include("database.php");

    function get_wallet($login) {
        $co = connect();
        $req = "SELECT wallet FROM users WHERE login='$login'";
        $res = mysqli_query($co, $req);
        $res = mysqli_fetch_array($res, MYSQLI_NUM);
        mysqli_close($co);
        return ($res[0]);
    }
?>