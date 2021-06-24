<?php
var_dump($_POST);


$b = array(
    'date' => $_POST['Date'],
    'emetteur' => $_POST['ID_Connect'],
    'destinataire' => '1',
    'montant' => $_POST['Montant']
);
$fichier = fopen('liste_transactions.php', 'r+');
$contents = fread($fichier, filesize('liste_transactions.php')-4);
//fseek($fichier, 20,SEEK_SET);
fwrite($fichier, 'test');




