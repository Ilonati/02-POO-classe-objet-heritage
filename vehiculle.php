<?php
class Vehicule{
     private string $marque;
    private string $constructeur;
    private int $vitesse = 0;

public function __construct(string $marque, string $constructeur) {
        $this->marque = $marque;
        $this->constructeur = $constructeur;
    }

    public function __destruct() {
        echo "<br>Destruction du véhicule : {$this->marque}";
    }

    public function getMarque():string {
        return $this->marque;
    }

     public function getConstructeur():string {
        return $this->constructeur;
    }

    public function getVitesse():int {
        return $this->vitesse;
    }
    public function setMarque(string $marque) {
        $this->marque = $marque;
    }

    public function setConstructeur(string $constructeur) {
        $this->constructeur = $constructeur;
    }
     public function demarrer() {
        echo "<br>Le véhicule démarre";
    }
    public function accelerer($valeur): void {
        if ($valeur < 0) {
            echo "<br>Oups : la valeur d'accélération ne peut pas être négative.";
            return;
        }
        if ($this->vitesse + $valeur > 200) {
            echo "<br>Oups : vitesse maximale de 200 km/h dépassée.";
        } else {
            $this->vitesse += $valeur;
            echo "<br>Vitesse actuelle : {$this->vitesse} km/h";
        }
    }
    public function freiner($valeur): void {
        if ($valeur < 0) {
            echo "<br>Oups : la valeur de freinage ne peut pas être négative.";
            return;
        }
        if ($this->vitesse - $valeur < 0) {
            echo "<br>Oups : la vitesse ne peut pas être à 0 km/h.";
        } else {
            $this->vitesse -= $valeur;
            echo "<br>Vitesse actuelle : {$this->vitesse} km/h";
        }
    }

}

$voiture = new Vehicule("<br>Clio", "Renault");

$voiture->demarrer();
$voiture->accelerer(50); 
$voiture->freiner(20);     
$voiture->accelerer(180);  
$voiture->freiner(40);     

unset($voiture); 

// class Voiture extends Vehicule {
//  private  $nbPortes;
// public function __construct($marque, $constructeur, $nbPortes) {
//         parent::__construct($marque, $constructeur);
//         $this->nbPortes = $nbPortes;
//     }
//  public function getNbPortes() {
//         return $this->nbPortes;
//     }
//     public function setNbPortes($nbPortes){
//         $this->nbPortes = $nbPortes;
//     }
//     public function klaxonner(){
//         echo "<br>La voiture klaxonne";
//     }
//      public function demarrer(){
//         echo "<br>La voiture démarre";
//     }
// }


// $voiture1 = new Voiture("<br>308", "Peugeot", 5);

// $voiture1->demarrer();     
// $voiture1->klaxonner();    
// $voiture1->accelerer(60);  
// $voiture1->freiner(30);    

// echo "<br>Marque : " . $voiture1->getMarque();          
// echo "<br>Constructeur : " . $voiture1->getConstructeur();
// echo "<br>Nombre de portes : " . $voiture1->getNbPortes();
// unset($voiture1);        

?>