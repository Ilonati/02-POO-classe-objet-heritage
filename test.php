<?php

include "vehiculle.php";
include "Voiture.php";
include "VoitureElectrique.php";

$voiture = new Vehicule("<br>Clio", "Renault");

$voiture->demarrer();
$voiture->accelerer(50); 
$voiture->freiner(20);     
$voiture->accelerer(180);  
$voiture->freiner(40);


$Voiture = new Voiture("308", "Peugeot", 5);

echo "<br>Marque : " . $Voiture->getMarque();          
echo "<br>Constructeur : " . $Voiture->getConstructeur();
echo "<br>Nombre de portes : " . $Voiture->getNbPortes();

$Voiture->demarrer();     
$Voiture->klaxonner();    
$Voiture->accelerer(60);  
$Voiture->freiner(30); 


$tesla = new VoitureElectrique("Model 3", "Tesla", 4, 450);

echo "<br>Marque : " . $tesla->getMarque();
echo "<br>Constructeur : " . $tesla->getConstructeur();
echo "<br>Portes : " . $tesla->getNbPortes();
echo "<br>Autonomie : " . $tesla->autonomie . " km";

$tesla->demarrer();    
$tesla->klaxonner();   
$tesla->recharger();   
$tesla->accelerer(70);

unset($voiture);
unset($Voiture);
unset($tesla);

?>
