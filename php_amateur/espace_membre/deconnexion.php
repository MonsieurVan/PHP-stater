<?php
session_start();
// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
header('Location: connexion.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>