<div class="nav-menu" id="menu">
    <a href="/">42 shop</a>
    <a href="">BDE</a>
    <a href="">Bocal</a>
    <a href="">Adm</a>
    <?php
        include('model/basket.php');
        include('model/account.php');
        session_start();
        if (!isset($_SESSION['loggued_on_user'])) {
            echo "<a href='./login.php'>Sign in</a>";
            echo "<a href='/register.php'>Register</a>";
        } else {
            echo "<a href='./controller/logout.php'>Logout</a>";
            echo "<a href='./basket.php'>Basket<span class='basket-counter'> " . get_number_of_product() . "</span> </a>";
            echo "<a><span class='wallet'>" . get_wallet($_SESSION['loggued_on_user']) . " Wallets</span></a>";
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