<?php
spl_autoload_register(function ($class) {
    include 'models/' . $class . '.php';
});

$br = "<br>";

$database = new Database();
$clientManager = new ClientManager($database);
// // Exercice 1
// // Contient connexion PDO
// $allClients = $clientManager->getAllClients();
// // var_dump($allClients); affiche un array de l'objet clients
// foreach ($allClients as $unClient) {
//     echo "Nom & Prénom du client : " . $unClient->getLastName() . " " . $unClient->getFirstName() . $br;
// }
// // Exercice 3
// $twentyClients = $clientManager->get20Clients();
// foreach ($twentyClients as $unClient) {
//     echo "Nom & Prénom du client : " . $unClient->getLastName() . " " . $unClient->getFirstName() . $br;
// }
// // Exercice 5
// $findClients = $clientManager->getClientByName("M");
// foreach ($findClients as $unClient) {
//     echo "Nom & Prénom du client : " . $unClient->getLastName() . " " . $unClient->getFirstName() . $br;
// }

// // // Exercice bonus
// // // $findCC = $clientManager->get1Client();
// // // var_dump($findCC);

// // Exercice 4
// $findLoyalClients = $clientManager->getLoyaltyCard();
// foreach ($findLoyalClients as $unClient) {
//     echo "Nom & Prénom du client : " . $unClient['lastName'] . " " . $unClient['firstName'] . $br;
// }


$showManager = new ShowManager($database);
// Exercice 2 affichage de toutes les données et puis filtre sur le genre de spectacles
$allShows = $showManager->getAllShows();
var_dump($allShows);
$showTypes = $showManager->getShowTypes();
echo "Les types de spectacles possibles sont : " . $br;
foreach ($showTypes as $showType) {
        echo "* " . $showType['type'] . $br;
    }