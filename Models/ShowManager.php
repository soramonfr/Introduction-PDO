<?php 
/**
 * Classe qui permet de créer des objets Show à partir de la base de données
 * (Principe d'hydratation : https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1666289-manipulation-de-donnees-stockees)
 * Cette classe a besoin de la connexion à la base de données pour fonctionner
 */
class ShowManager
{
    private $db;

    public function __construct($database)
    {
        $this->db = $database->getDb();
    }

    public function getAllShows() {
        $reponse = $this->db->query("SELECT * FROM shows ORDER BY `title` ASC");
        return $this->fetchAllCC($reponse);
    }

    public function getShowTypes() {
        $reponse = $this->db->query("SELECT type FROM `showTypes`");
        return $reponse->fetchAll(PDO::FETCH_ASSOC);
    }

    private function fetchAllCC($reponse) {
        $shows =  $reponse->fetchAll(PDO::FETCH_ASSOC);        
        $listeShows = [];
        foreach ($shows as $show) {
            array_push($listeShows, new Shows($show));
        }
        return $listeShows;
    }
}