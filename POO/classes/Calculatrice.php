<?php
class Calculatrice{

 private $marque;
 private $type;
 private $niveau_scolaire;

 public function getMarque(){
    return $this->marque;
 }
 public function setMarque ($marque){
    $this->marque =$marque;
 }
 public function getType(){
    return $this ->type;
 }
 public function setType($type){
    return $this->type =$type;
 }
 public function getNiveauScolaire(){
    return $this->niveau_scolaire;
 }
 public function setNiveauScolaire($niveau_scolaire){
    return $this ->niveau_scolairs_scolaire = $niveau_scolaire;
 }

  public function additionner($add1, $add2){
    return $add1 + $add2;
  }
  
  public function soustraire($add1, $add2){
    return $add1 - $add2;
  } 
  
  public function multiplier ($add1, $add2){
    return $add1 * $add2;
  } 
  
  public function diviser($add1, $add2){
    return $add1 / $add2;
  }

}
$calculatrice = new Calculatrice();
$calculatrice ->setMarque =('casio');
$calculatrice ->setType =('seintifique');
$calculatrice ->setNiveau_scolaire=('lycée');

echo $calculatrice->additionner(11,15);
echo"\n";
echo $calculatrice->soustraire(10,2);

echo $calculatrice ->getType() . "\n";

echo $calculatrice->getMarque();
echo $calculatrice->getNiveauScolaire();


?>