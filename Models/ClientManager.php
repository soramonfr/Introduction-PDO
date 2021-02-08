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

    public function getAllClients() {
        $reponse = $this->db->query("SELECT * FROM clients");
        $clients =  $reponse->fetchAll(PDO::FETCH_ASSOC);
        $listeClients = [];
        foreach ($clients as $client) {
            array_push($listeClients, new Clients($client));
        }
        return $listeClients;
    }
}

?>