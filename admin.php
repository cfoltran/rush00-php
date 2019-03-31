<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	<link rel="stylesheet" href="css/admin.css" type="text/css">
    <title>42 Shop</title>
</head>
<body>
<span style="font-family: monospace">
<?php
    include('menu.php');
    $i = 0;
    $nb_commande = 4;
    while ($i <$nb_commande)
    {
    ?>
        <div class="admincommande">
        commande de : Nom d utilisateur <?php echo $price; ?> <input class="retirer" type = button value = Expedier>
     <?php   
        $nb_article = 10;
        $j = 0;
        $prixdecommande = 0;
    while ($j < $nb_article)
    {
        $price = 10;
    ?>
        <div class="basket">
        name of Article  <?php echo " Price :".$price; ?> <input class="retirer" type = button value = 'Plus disponible'>
        </div>
        <?php
        $prixdecommande = $prixdecommande + $price;
        $j++;
    }
    echo "prix : ".$prixdecommande;
        ?>
        </div>
        <?php
        $i++;
    }
    ?>
    <div class = addtostock>
            <h1> partie gestion du stock </h1>
    <form method="POST" action="">
    Name : <input type="text" name="name" value="" /><br>
    Description : <input type="text" name="name" value="" /><br>
    photo : <input type="text" name="name" value="" /><br>
    Categorie : <input type="text" name="name" value="" /><br>
    Prix : <input type="number" min="0" name="prix" value="" /><br>
    Quantité : <input type="number" min="0" name="qte" value="" /><br>
    Ajouter cet article à la vente : <p/><input type="submit" name="submit" value="ajouter">
    <form>
</div>
    <?php
    $nbarticle = 10;
    $i = 0;
    while ($i < $nb_article)
    { ?>
            <div class="admincommande">
            Nom de l article : 50 en stock au prix de 20 $ l unité<br>
            <html><body><form method="POST" action="">
    ajouter au stock : <input type="number" min="0" name="add<?php echo $i?>" value ="" />
    <input type="submit" name="submit" value="ajouter"> 
    <input type="submit" name="submit" value="retirer">
    </body><html>
            </div>
            <?php 
            $i++;       
    }
    ?>
 </span>   
</body>
</html>