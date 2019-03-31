<?php 
    include("../model/database.php");

    function remove_account() {
        session_start();
        $login = $_SESSION['loggued_on_user'];
        $co = connect();
        $req = "DELETE FROM users WHERE login='$login'";
        $req = mysqli_query($co, $req);
        mysqli_close($co);
        if ($req)
            header('Location: ../index.php');
        header('Location: ../index.php');
    }

    if ($_GET['action'] === "del")
        remove_account();
?>