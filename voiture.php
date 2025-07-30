<?php
include "./vehiculle.php";
class Voiture extends Vehicule {
 private  $nbPortes;
public function __construct($marque, $constructeur, $nbPortes) {
        parent::__construct($marque, $constructeur);
        $this->nbPortes = $nbPortes;
    }
 public function getNbPortes():string {
        return $this->nbPortes;
    }
    public function setNbPortes($nbPortes){
        $this->nbPortes = $nbPortes;
    }
    public function klaxonner(){
        echo "<br>La voiture klaxonne";
    }
     public function demarrer(){
        echo "<br>La voiture démarre";
    }
}


$Voiture = new Voiture("308", "Peugeot", 5);

echo "<br>Marque : " . $Voiture->getMarque();          
echo "<br>Constructeur : " . $Voiture->getConstructeur();
echo "<br>Nombre de portes : " . $Voiture->getNbPortes();

$Voiture->demarrer();     
$Voiture->klaxonner();    
$Voiture->accelerer(60);  
$Voiture->freiner(30);    

unset($Voiture);   
 
?>