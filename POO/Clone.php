<?php
require 'classes/Client.php';

$client1 = new client();
$client1->setNom("ali");
$client1->setPrenom("hmod");
$client1->setAge(35);
$client1->setE_mail("aedalaa36@gmail.com");
$client1->setId_client(1);

$client2 = $client1;

$client2 ->setPrenom("ofofof");

echo'<pre>';
print_r($client1);
echo "\n";
print_r($client2);
echo'<pre>';

