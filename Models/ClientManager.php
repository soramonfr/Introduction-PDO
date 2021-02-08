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
        // Renvoie un tableau de résultats
        $clients =  $reponse->fetchAll(PDO::FETCH_ASSOC);
        
        $listeClients = [];
        foreach ($clients as $client) {
            array_push($listeClients, new Clients($client));
        }
        return $listeClients;
    }

    public function get20Clients() {
        $reponse = $this->db->query("SELECT * FROM clients LIMIT 20");
        // Renvoie un tableau de résultats
        $clients =  $reponse->fetchAll(PDO::FETCH_ASSOC);
        
        $listeClients = [];
        foreach ($clients as $client) {
            array_push($listeClients, new Clients($client));
        }
        return $listeClients;
        
    }
    // Autre alternative, sans limite. Mais qui aurait lancé une erreur si moins de 20 entrées dans le tableau.
    // for ($i = 0; $i < 20 ; $i++) {
    //     array_push($listeClients, new Clients($clients[$i]));
    // }
}

?>