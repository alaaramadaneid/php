<?php
class Produit{
    //les attributs
public $id_produit;

public $nom;

public $prixHT;


const TVA =20;

//méthode
public function afficherPrixTtc(){
    return $this-> prixHT+(  $this->prixHT *self::TVA /100);
}

public static function afficherTVA(){
  return "la TVA est  ".self::TVA. " %";
}
}
$produit = new Produit();
$produit->id_produit = 1;
$produit->nom ="ballon";
$produit->prixHT =19.99;
echo $produit->afficherPrixTtc();
echo Produit::afficherTVA();
?>