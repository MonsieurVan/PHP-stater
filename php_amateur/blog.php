<?php
session_start();
echo 'je me souviens de toi. Tu t\'appeles '. $_SESSION['nom'] . ' et ton prenom est '. $_SESSION['prenom'];
?>