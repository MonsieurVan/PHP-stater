<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width" initial-scale=1.0">
    <link rel ="stylesheet" href="style.css" >
    <title>Document</title>
</head>
<body>
    <?php include("menu.php"); ?>
  
    <h1>INSCRIPTION</h1>

   <form method="POST" action="bonjour.php" enctype="multipart/form-data">

        <label for="nom">NOM<label><br>
        <input type="text" name="nom" id="nom" placeholder="entrez votre nom"></input><br>

        <label for="prenom">PRENOM<label><br>
        <input type="text" name="prenom" id="prenom" placeholder="entrez votre prenom"></input><br>

        <label for="pp">PHOTO DE PROFIL<label><br>
        <input type="file" name="pp" id="pp"></input><br>

        <label for="pays">selectionner votre pays<label><br>

        <select name="pays" id="pays">
            <option value="cameroun">Cameroun</option>
            <option value="afrique_du_sud">Afrique du sud</option>
            <option value="etats_unis" selected="selected">Etats unis</option>
            <option value="canada">Canada</option>
        </select><br>

        <label for="bac">Diplomes obtenus<label><br>
        <input type="checkbox" name="bac" id="bac">BACCALAUREAT</input><br>
        <input type="checkbox" name="prob" id="prob">PROBATOIRE</input><br>
        <input type="checkbox" name="bepc" id="bepc">BEPC</input><br>
        <input type="checkbox" name="cep" id="cep">CEP</input><br>

        <label for="sexe">SEXE<label><br>
            <label for="homme">homme<label>
            <input type="radio" name="sexe" id="homme" value="homme" checked="checked" />
            <label for="femme">femme<label>
            <input type="radio" name="sexe" id="femme" value="femme" /><br>

        <label for="mdp">Mot de passe<label><br>
        <input type="password" name="mdp" id="mdp" placeholder="entrez votre mdp"></input><br>
       
        <input type="submit" value="connexion"></input>
        
   </form>

   <a href="chat/mini_chat.php">mini chat </a>
   <a href="classes/implementationClass.php">classes </a> <br>
   <a href="espace_membre/connexion.php">espace membre </a>




</body>
</html>