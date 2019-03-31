<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	<link rel="stylesheet" href="css/basket.css" type="text/css">
    <title>42 Shop</title>
</head>
<body>
<?php
    include('menu.php');
    $i = 0;
    $nb_article = 10;
    $pricetotal = 0;
    while ($i < $nb_article)
    {
        $price = 10;
    ?>
        <div class="basket">
        name of Article  <?php echo " Price :".$price; ?> <input class="retirer" type = button value = Retirer>
        </div>
        <?php
        $pricetotal = $pricetotal + $price;
        $i++;
    }
    ?>
    <div class = pricetot> prix total : <?php echo $pricetotal ?> </div>
    <input type = button value = 'valider le panier'>
</body>
</html>