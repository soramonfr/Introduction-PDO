<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à la PDO - Partie 1</title>
</head>

<body>
    <?php
    // connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
    // Envoi d'une requête à la BDD
    $reponse = $bdd->query('select * from clients');
    // $donnees = $reponse->fetch();
    // var_dump($donnees);

    // Extraction des résultats (ligne par ligne) puis affichage
    while ($donnees = $reponse->fetch()) {
        
    ?>

</body>

</html>