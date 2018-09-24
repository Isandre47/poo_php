<?php

require 'challenge.php';

$merlin = new Personne("Hamon", "Olivier", "2 rue de l'abbé chamel", "29-09-1974");

echo ("Avant modification de l'adresse <br><br>". $merlin->afficher());

$merlin->modifadress("2 avenue de Shibbuya");

echo ("<br><br>Après modification de l'adresse <br><br>". $merlin->afficher());

echo($merlin->age(). " ans");

?>
