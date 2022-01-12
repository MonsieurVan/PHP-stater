<?php include("../config.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> BIENVENUE SUR MON CHAT</p>
    <a href="../index.php">accueil</a> <br><br>

    <form method="POST" action="minichat_post.php">
    
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="entrez votre pseudo" value="Van"><br><br>
        <label for="message">Message</label>
        <input type="text" name="message" id="message">
        <input type="submit" value="send">

    </form>

    <?php
        $reponse = $bdd -> query('SELECT pseudo, messages, sended_at as sended_at from minichat ORDER BY id DESC limit 10 ') ;
        
        $reponse2 = $bdd -> query('SELECT hour(sended_at) as heure from minichat') ;
        $reponse3 = $bdd -> query('SELECT  minute(sended_at) as minut from minichat ') ;
        $reponse4 = $bdd -> query('SELECT  second(sended_at) as seconde from minichat ') ;

        $donnees2 = $reponse2 -> fetch();
        $donnees3 = $reponse3 -> fetch();
        $donnees4 = $reponse4 -> fetch();

        /*<h6> Le <?php echo $donnees['sended_at']; ?> </h6> <br>*/


        while ($donnees = $reponse -> fetch()){
            ?>
             <h3> <strong> <?php echo $donnees['pseudo']; ?></strong> </h3> 
             <p> <?php echo $donnees['messages']; ?> </p>

            <h6> Le <?php echo $donnees['sended_at'];

            //echo date('d-m-y h : i : s');
            //echo date('d-m-y ');
            ?> </h6> <br>
           
            
    <?php
        }
        $reponse->closeCursor();
    ?>

</body>
</html>