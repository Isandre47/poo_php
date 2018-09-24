<?php

class Personne{

    public $nom;
    public $prenom;
    public $adresse;
    public $date;

    public function __construct($nom,$prenom,$adresse,$date){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->date = $date;
    }
    // affichage du nom et prénom adresse date
    public function afficher(){
        $affichage = $this->nom  . ' ' . $this->prenom . ' ' . $this->adresse . ' ' . $this->date . '<br>';
        return $affichage;
    }
    // modification de l'adresse
    public function modifadress($newadress){
        $this->adresse = $newadress;
    }
    // calcul de l'âge
    public function age(){
        $annee = explode("-",$this->date);              //explode l'année entrée
        $ans = (date(Y)) - $annee[2];                   //calcul de l'âge

        if ( date(m) < $annee[1] ){                     // si le mois en cours est plus petit que l'année entrée par l'utilisateur
            return $ans -=1;
        }elseif( date(d) < $annee[0] ){                 // si le jour en cours est plus petit que l'année entrée par l'utilisateur
                return $ans -=1; 
        }
        else{
            return $ans;
        }
            
    }
}

?>
