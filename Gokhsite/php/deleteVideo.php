<?php require_once(__DIR__ . '/header.php'); ?>



    <?php
// Vérifier si les données sont envoyées via POST
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lienyt'])) {
    // Récupérer la valeur envoyée via POST
    $lienyt = $_POST['lienyt'];
    
    // Préparer la requête SQL pour supprimer une ligne où pseudo et lien correspondent
    $sqlQuery = 'DELETE FROM ytlink WHERE pseudo = :pseudo AND lien = :lien';
    
    // Préparer la requête
    $delete = $mysqlClient->prepare($sqlQuery);
    
    // Exécuter la requête avec les paramètres
    $delete->execute([
        ':pseudo' => $_SESSION['username'],
        ':lien' => $lienyt,
    ]);
    echo "delete";
    //echo '<meta http-equiv="refresh" content="3;url=login.php">';

    
}
?>