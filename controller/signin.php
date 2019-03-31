<?php
    include("../model/database.php");

    function    auth($login, $passwd) {
        $co = connect();
        if (!isset($passwd) || !isset($login))
            return (false);
        $hash = hash('whirlpool', $passwd);
        $req = "SELECT login FROM users WHERE login = '$login' AND passwd = '$hash'";
        $res = mysqli_query($co, $req);
        $login = mysqli_fetch_array($res, MYSQLI_NUM)[0];
        mysqli_close($co);
        if ($login)
            return (true);
        return (false);
    }
    session_start();
    $co = connect();
    $login = mysqli_real_escape_string($co, $_POST['user']);
    $passwd = mysqli_real_escape_string($co, $_POST['passwd']);
    mysqli_close($co);
    if (isset($login) && isset($passwd) && auth($login, $passwd)) {
        $_SESSION['loggued_on_user'] = $login;
        header('Location: ../index.php');
    } else {
        $_SESSION['loggued_on_user'] = null;
        echo "<script type='text/javascript'> alert('Oups, il semblerait que vous vous êtes trompé  😅'); window.location='../index.php" . "'</script>";
    }
?>
