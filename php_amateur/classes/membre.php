<?php
class Membre
{
    // Attributs
    private $pseudo;
    private $email;
    private $signature;
    private $actif;

    // Accesseurs et mutateurs
    public function getPseudo(){
        return $this->pseudo ;
    }

    public function setPseudo($newPseudo){
        if (!empty($newPseudo) AND strlen($newPseudo) < 15)
        {
            $this->pseudo = $newPseudo;
        }    
    }
       
    // Constructeur
    public function __construct($ps){
        $this->pseudo = $ps ;
    }

    // Methodes
    public function presentation(){
        echo 'je m\'appele '. $this->pseudo;
    }


}

?>