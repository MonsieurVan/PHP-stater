<?php session_start(); ?>

<?php
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p> vous etes connecté <strong> <?php echo $_SESSION['pseudo']; ?> </strong> </p>

<a href="deconnexion.php"> Déconnexion </a>

    
</body>
</html>

<?php }?>