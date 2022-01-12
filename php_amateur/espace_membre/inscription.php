<?php session_start() ;?>



<?php include '../config.php' ;?>

<?php 

//$nbre = strlen($_POST['mdpConfirme']) ;

if (!empty($_POST['pseudo']) && !empty($_POST['mdpConfirme']) && preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])) {

    if($_POST['mdp'] == $_POST['mdpConfirme']){

        $reponse = $bdd -> prepare(' SELECT id from membres where pseudo = :username ') ;

        $reponse -> execute(array(
            'username' => $_POST['pseudo']
        ));

        $donnees = $reponse -> fetch() ;

        //$reponse->closeCursor();



       if(!$donnees){

            $mdpHache = sha1($_POST['mdpConfirme']);

            $req = $bdd->prepare('INSERT INTO membres(pseudo, motDePasse) VALUES (:pseudo, :mdp)');
            $req -> execute(array(
            'pseudo' => strip_tags($_POST['pseudo']),
            'mdp' => $mdpHache
            ));
        
            $req->closeCursor();    
        
            header('Location: connexion.php'); // redirection vers la page du formulaire
            echo 'compte créé ';
       }
       else
       {
           echo ' pseudo déja utilisé ';
       }

    }
    else {
        echo 'les mots de sont différents';
    }

}
else {
    echo 'Veuillez remplir tous les champs';

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
<a href="../index.php">accueil</a> <br><br>
<h1> INSCRIPTION </h1>

    <form method="POST" action="inscription.php">

        <label for="pseudo"> Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo"><br><br>

        <label for="mdp"> Mot de passe</label>
        <input type="password" id="mdp" name="mdp" placeholder="Entrez votre mot de passe"><br>

        <label for="mdpConfirme"> Confirmer le mot de passe</label>
        <input type="password" id="mdpConfirme" name="mdpConfirme" placeholder="Confirmer le mot de passe"><br>

        <input type="submit" value="INSCRIPTION">

    </form>
</body>
</html>