<?php
    include("../model/database.php");

    function    auth($login, $passwd) {
        $co = connect();
        if (!isset($passwd) || !isset($login))
            return (false);
        $hash = hash('whirlpool', $passwd);
        $req = "SELECT login FROM USERS WHERE login = '$login' AND passwd = '$hash'";
        $req = mysqli_query($co, $req);
        mysqli_close($co);
        if ($req)
            return (true);
        return (false);
    }
    session_start();
    $co = connect();
    $login = mysqli_real_escape_string($co, $_POST['login']);
    $passwd = mysqli_real_escape_string($co, $_POST['passwd']);
    mysqli_close($co);
    if (isset($login) && isset($passwd) && auth($login, $passwd)) {
        $_SESSION['loggued_on_user'] = $login;
        header('Location: ../index.php');
    } else {
        $_SESSION['loggued_on_user'] = null;
        header('Location: ../login.php');
    }
?>
