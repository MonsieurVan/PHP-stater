<?php include '../config.php' ;?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../index.php">accueil</a> <br><br>

    <form method="POST" action="connexion.php">

        <label for="pseudo"> Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo"><br><br>
        <label for="mdp"> Mot de passe</label>
        <input type="password" id="mdp" name="mdp" placeholder="Entrez votre mot de passe"><br>
        <input type="submit" value="login">

    </form>

    <a href="inscription.php">Inscription</a> <br><br>

</body>
</html>


<?php 

// Hachage du mot de passe
$pass_hache = sha1($_POST['mdp']);

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND motDePasse = :pass');

$req->execute(array(
'pseudo' => strip_tags($_POST['pseudo']),
'pass' => $pass_hache));

$resultat = $req->fetch();
if (!$resultat){
    echo 'Mauvais identifiant ou mot de passe !';
}
else {
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = strip_tags($_POST['pseudo']);
        //echo 'Vous êtes connecté !';
        header('Location: welcome.php'); // redirection vers la page du formulaire

}


?>

