<?php
class Personne{
  //l'intériore de la classe 

    //création des attributs de l'objet
   private $nom;

   private $prenom;
    
   private $age;

   const BRAS =2;
   public static $jambes = 2;

   // création des methods
   //ce sont les actions que peut faire l'objet
     public function getNom(){
        return $this->nom;
     }
     public function setNom($nom){
        $this->nom = $nom;
     }

     public function getPrenom(){
        return $this ->prenom;
     }

     public function setPrenom($prenom){
        return $this->prenom =$prenom;
     }
     public function getAge(){
        return $this->age;
     }
     public function setAge($age){
        return $this->age =$age;
     }
     
   public function parler() {

    return 'je parle';
   }
   public function manger() {

    return'je mange';
   }
   public function marcher() {

    return 'je marche';
   }
    //l'intériore de la classe 
}
//l'extrieur de la classe 
$personne = new Personne();
$personne->setNom('EID');
$personne->setPrenom('Alaa');
$personne->setAge(27);
echo $personne ->getPrenom();
echo "\n";
echo $personne->getNom();
echo "\n";
echo $personne->getAge();

 echo " les numnres de Bras " . Personne:: BRAS;
 Personne::$jambes =6 ;
 echo Personne::$jambes;

?><