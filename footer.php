<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
    <title>Fakiromania</title>
</head>
<body>
    <footer>
        <a class="btn-blue">Espace administrateur</a>
        <?php
            session_start();
            if (isset($_SESSION['loggued_on_user'])) {
                echo '<a href="controller/account.php?action=del" class="btn-blue">Delete account</a>';
            }
        ?>
        <a class="btn-blue">CGU</a>
        <p>© 2019 make with ☕️ by Clément and Boris</p>
    </footer>
</body>
</html>
