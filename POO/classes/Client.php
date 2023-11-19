<?php
require 'classes/Personne.php';

class Client extends Personne{

    private $id_client;

    private $e_mail;


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
$client = new Client();
$client ->setId_client(1);
$client ->setNom("nadaw");
$client ->setPrenom("laurent");
$client ->setAge(35);
$client ->setE_mail("tester@gmail.com");

echo $client->manger();