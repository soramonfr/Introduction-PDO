<?php
spl_autoload_register(function ($class) {
    include 'models/' . $class . '.php';
});

$br = "<br>";

$database = new Database();
// Exercice 1
$clientManager = new ClientManager($database);
$allClients = $clientManager->getAllClients();
// var_dump($allClients); affiche un array de l'objet clients
foreach ($allClients as $unClient) {
    echo "Nom & Prénom du client : " . $unClient->getLastName() . " " . $unClient->getFirstName() . $br;
}
