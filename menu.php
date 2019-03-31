<div class="nav-menu" id="menu">
    <a href="/">42 shop</a>
    <a href="">BDE</a>
    <a href="">Bocal</a>
    <a href="">Adm</a>
    <?php
        session_start();
        if (!isset($_SESSION['loggued_on_user'])) {
            echo "<a href='./login.php'>Sign in</a>";
            echo "<a href='/register.php'>Register</a>";
        } else {
            echo "<a href='./controller/logout.php'>Logout</a>";
            echo "<a href='./index.php'>Panier</a>";
        }
    ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("menu");
        if (x.className === "nav-menu") {
            x.className += " responsive";
        } else {
            x.className = "nav-menu";
        }
    }
</script>