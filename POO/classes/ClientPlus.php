<?php
require 'classes/Personne.php';

class ClientPlus extends Personne{

    private $id_client;

    private $e_mail;

    public function__construct($nom, $prenom, $age, $e_mail, $id_client){
     $this->setNom($nom);
     $this->setPrenom($prenom);
     $this->setAge($age);
     $this->setE_mail($e_mail);
     $this->setId_client($id_client);


    }
   
    public function__destruit(){
        echo " l'objet a été deftr ";
    }

    public function getId_client(){
        return $this->id_client;
    }
    public function setId_client($id_client){
        $this->id_client=$id_client;    
    }
    public function getE_mail(){
        return $this->e_mail;
    }
    public function setE_mail($e_mail){
        $this->e_mail=$e_mail;    
    }

    public function acheter(){
        return "j'achète";
    }
    public function manger(){
        return parent::manger(). 'au resurant';
    }
}
$client = new ClientPlus("EID","Alaa",27 ,"aedala36@gmail.com",12);


echo $client->manger();