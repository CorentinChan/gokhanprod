<?php require_once(__DIR__ . '/header.php'); ?>


<?php
// Vérifier si les données sont envoyées via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer la valeur envoyée via POST
    $pseudo = $_SESSION['username'];
    $score =  $_POST['score'];
    // Afficher la valeur reçue

    $sqlQuery = 'SELECT * FROM scoredragoon';
            
    $dragoonscoreStatement = $mysqlClient->prepare($sqlQuery);
    $dragoonscoreStatement->execute();
    $dragoonscore = $dragoonscoreStatement->fetchAll();
    $authenticated = false;$scoreplus=false;
    // Vérifier si le pseudo est déjà utilisé
    foreach ($dragoonscore as $scorejeu) {
        if ($scorejeu['pseudo'] === $pseudo) {
        
            $authenticated = true;
            if($scorejeu['score']<$score)$scoreplus=true;
            break;
        }
    }

if($authenticated === true){

    if($scoreplus===true){
    $sqlQuery = "UPDATE scoredragoon SET score = :score WHERE pseudo = :pseudo && score<:score" ;

    // Préparer la déclaration
    $updatescore = $mysqlClient->prepare($sqlQuery);
    
    // Exécution ! La recette est maintenant en base de données
    $updatescore->execute([
        ':score' => $score,
        ':pseudo' => $pseudo,
    ]);
                }
    }

else{
    $sqlQuery = 'INSERT INTO scoredragoon (pseudo,score) VALUES (:pseudo, :score)';
    $insert = $mysqlClient->prepare($sqlQuery);
    $insert->execute([
        ':pseudo' => $_SESSION['username'],
        ':score' => $score,
    ]);
}


    echo "Le pseudo reçu est : " . htmlspecialchars($pseudo) . "le score est" . $score;
} else {
    echo "Aucune donnée reçue";
}


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer des données avec JavaScript</title>
</head>
<body>
    <h1>Envoyer une valeur à PHP</h1>
    
    <!-- Champ de texte pour entrer un pseudo -->
    <input type="text" id="pseudo" placeholder="Entrez votre score">
    <button onclick="sendData()">Envoyer</button>

    <div id="response"></div>

    <script>
        // Fonction pour envoyer la donnée à PHP
        function sendData() {
            // Récupérer la valeur du champ de texte
            const pseudo = document.getElementById('pseudo').value;
            let score= 10;
            // Créer un objet FormData pour envoyer les données en POST
            const formData = new FormData();
            formData.append('pseudo', pseudo);  // Ajouter la valeur 'pseudo' à FormData
            formData.append('score', score);  // Ajouter la valeur 'pseudo' à FormData
            // Utiliser fetch pour envoyer la requête POST à receive.php
            fetch('test.php', {
                method: 'POST',
                body: formData
            })

            .then(response => response.text())  // Traiter la réponse du serveur
            .then(data => {
                // Afficher la réponse dans la page
                document.getElementById('response').innerText = data;
            })
            .catch(error => console.error('Erreur:', error));  // Gérer les erreurs
        }
    </script>
</body>
</html>
