<?php
    include_once('membre.php');
?>

<?php
    class Admin extends Membre{
        private $couleur ;

        public function __construct($coul){
            $this->couleur = $coul ;

        }

        public function couleur(){
            echo 'ma couleur est '. $this->couleur;
        }
        
    }
?>

