<?php
include_once('membre.php');
include_once('admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $membre = new Membre('junior');
        $admin = new Admin('bleu');


        //$membre->setPseudo('bobo');
       // $membre->presentation();
       //$admin->setPseudo('junior');
       $membre->presentation();
       $admin->couleur();
    ?>
</body>
</html>