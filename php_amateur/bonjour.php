<?php
   /* session_start();
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'] ;*/

?>

<?php
        //setcookie('zizi', $_POST['nom'], time() + 365*24*3600, null , null, false, true);
?>

<?php include("config.php"); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="style.css" >

    <title>Document</title>
</head>
<body>
<p>Initiation à PHP </p>

<?php
/*if(isset($_POST['sexe']))
echo $_POST['sexe'];
else
echo "la case n'a pas été coché";*/
//echo strip_tags($_POST['nom']);
/*if(isset($_FILES['pp']) AND $_FILES['pp']['error'] == 0){
    echo 'fichier envoyé et pas derreur \n';
}
else{
    echo 'fichier abscent et l erreur est'. $_FILES['pp']['error'];
}

if($_FILES['pp']['size'] < 100000){
    echo "fichier accepté";
}
else {
    echo "fichier refusé";
}*/

/*$infosfichier = pathinfo($_FILES['pp']['name']); // Verifier l'extension du fichier
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png');

if (in_array($extension_upload, $extensions_autorisees))
{
    move_uploaded_file($_FILES['pp']['tmp_name'], 'uploads/' .basename($_FILES['pp']['name']));
    echo "L'envoi a bien été effectué !";
    $avatar = basename($_FILES['pp']); 
    echo $avatar;
}
else {
    echo 'mauvaise extension';
}*/

/*$motDePasse = 'kangourou';

if($_POST['mdp'] == $motDePasse){
    echo 'code d\'accès au serveur central de la NASA est Van';
}
else{
    echo 'mot de passe incorrect ';
}*/

//echo ' AVEC LA SESSION, le nom est '. $_SESSION['nom'] . ' et le prenom est ' . $_SESSION['prenom'] ;
//echo 'AVEC LA COOKIE, le nom est '. $_COOKIE['zizi'];

/*$reponse = $bdd->prepare('SELECT * from jeux_video where possesseur = ?');
$reponse -> execute(array($_GET['possesseur']));

//$reponse = $bdd->query('SELECT * from jeux_video');

while ($donnees = $reponse->fetch()){
    ?>
    <table>

        <tr>
            <th>ID</th>
            <th>nom</th>
            <th>possesseur </th>
            <th>console </th>
            <th>prix </th>
            <th>nbre_joueurs_max </th>
            <th>commentaires </th>


        </tr>
       <tr>
            <td><?php echo $donnees['ID']; ?></td>
            <td><?php echo $donnees['nom']; ?></td>
            <td><?php echo $donnees['possesseur']; ?></td>
            <td><?php echo $donnees['console']; ?></td>
            <td><?php echo $donnees['prix']; ?></td>
            <td><?php echo $donnees['nbre_joueurs_max']; ?></td>
            <td><?php echo $donnees['commentaires']; ?></td>


       </tr>
      
</table>

<?php 
}

$reponse->closeCursor(); // Termine le traitement de la requête
*/
?>

<?php
    /*$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix,
    nbre_joueurs_max, commentaires) VALUES(\'GTA San andreas\',
    \'Van\', \'PC\', 60, 65, \'vie des jeunes\')');
        //$bdd->closeCursor(); // Termine le traitement de la requête

    echo 'Le jeu a bien été ajouté !';*/

    /*$nbre_modif = $bdd->exec('UPDATE jeux_video SET nom = \'GTA vice city\' where ID = 56 ;');
    echo $nbre_modif . ' ligne a été modifiée' ;*/
    $jeux = 'call of duty';
    $req = $bdd->prepare('UPDATE jeux_video SET nom = :nom_jeux where ID = 56 ;');
    $req -> execute(array('nom_jeux' => $jeux));
    echo 'le jeux a bien été ajouté';


?>
<br>




<a href="index.php">accueil</a>
<a href="blog.php">mon blog</a>

</body>
</html>