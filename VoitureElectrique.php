<?php
include "./voiture.php";
class VoitureElectrique extends Voiture {
    
    public int $autonomie;
    public function __construct(string $marque, string $constructeur, int $nbPortes, int $autonomie) {
        parent::__construct($marque, $constructeur, $nbPortes);
        $this->autonomie = $autonomie;
    }
    public function recharger(): void {
        echo "<br>Recharge en cours...";
    } 
    public function demarrer(): void {
        echo "<br>La voiture électrique démarre silencieusement";
    }
}

$tesla = new VoitureElectrique("Model 3", "Tesla", 4, 450);

echo "<br>Marque : " . $tesla->getMarque();
echo "<br>Constructeur : " . $tesla->getConstructeur();
echo "<br>Portes : " . $tesla->getNbPortes();
echo "<br>Autonomie : " . $tesla->autonomie . " km";

$tesla->demarrer();    
$tesla->klaxonner();   
$tesla->recharger();   
$tesla->accelerer(70);

unset($tesla);
    ?>