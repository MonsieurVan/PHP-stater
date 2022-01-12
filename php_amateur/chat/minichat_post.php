<?php include("../config.php"); ?>

<?php

if (isset($_POST['pseudo']) == ON AND isset($_POST['message']) == ON) {

    $req = $bdd->prepare('INSERT INTO minichat(id, pseudo, messages) VALUES(\'\', :pseudo, :message)');
    $req -> execute(array(
    'pseudo' => strip_tags($_POST['pseudo']),
    'message' => strip_tags($_POST['message'])
));

$req->closeCursor();

header('Location: mini_chat.php'); // redirection vers la page du formulaire

}

else {
    echo 'veuillez renseigner les deux champs';
}

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