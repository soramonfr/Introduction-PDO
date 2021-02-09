<?php

/**
 * Classe qui permet de créer des objets Client à partir de la base de données
 * (Principe d'hydratation : https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1666289-manipulation-de-donnees-stockees)
 * Cette classe a besoin de la connexion à la base de données pour fonctionner
 */
class ClientManager
{
    private $db;

    public function __construct($database)
    {
        $this->db = $database->getDb();
    }

    public function getAllClients()
    {
        $reponse = $this->db->query("SELECT * FROM clients");
        return $this->fetchAllCC($reponse);
    }

    public function get20Clients()
    {
        $reponse = $this->db->query("SELECT * FROM clients LIMIT 20");
        return $this->fetchAllCC($reponse);
    }
    // Autre alternative, sans limite. Mais qui aurait lancé une erreur si moins de 20 entrées dans le tableau.
    // for ($i = 0; $i < 20 ; $i++) {
    //     array_push($listeClients, new Clients($clients[$i]));
    // }

    public function getClientByName($lastName)
    {
        $reponse = $this->db->query("SELECT * FROM clients WHERE `lastName` LIKE '$lastName%' ORDER BY `lastName` ASC");
        return $this->fetchAllCC($reponse);
    }

    public function get1Client()
    {
        $reponse = $this->db->query("SELECT * FROM clients LIMIT 1");
        $client =  $reponse->fetch();
        return new Clients($client);
    }

    public function getLoyaltyCard()
    {
        $reponse = $this->db->query("SELECT clients.`lastName`, clients.`firstName` FROM clients INNER JOIN cards ON clients.`cardNumber` = cards.`cardNumber` INNER JOIN `cardTypes` on cards.`cardTypesID` = `cardTypes`.id WHERE type = 'Fidélité'");
        return $reponse->fetchAll(PDO::FETCH_ASSOC);
    }

    private function fetchAllCC($reponse)
    {
        $clients =  $reponse->fetchAll(PDO::FETCH_ASSOC);
        $listeClients = [];
        foreach ($clients as $client) {
            array_push($listeClients, new Clients($client));
        }
        return $listeClients;
    }
}
