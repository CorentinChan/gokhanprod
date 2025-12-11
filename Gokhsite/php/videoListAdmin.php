<?php require_once(__DIR__ . '/header.php'); ?>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['urls'])) {
    // Récupérer la valeur envoyée via POST
    $urls =  $_POST['urls'];
    $cat = isset($_GET['cat']) ? $_GET['cat'] : 'default';
     $bot = isset($_GET['bot']) ? $_GET['bot'] : 'default';

     $tabl ="videosUrl";
     if($bot==="true")$tabl="videosBottom";

    $deleteQuery = "DELETE FROM $tabl WHERE category = :cat";
    $deleteStmt = $mysqlClient->prepare($deleteQuery);
    $deleteStmt->execute([':cat' => $cat]);

    $liensyt = json_decode($_POST['urls'], true);

       $sqlQuery = "INSERT INTO $tabl (url,category) VALUES (:lien, :cat)";
        $insert = $mysqlClient->prepare($sqlQuery);
        foreach ($liensyt as $lienyt) {
            if($lienyt !="")
            {
                $insert->execute([
                ':cat' => $cat,
                ':lien' => $lienyt
            ]);
            

            }
            
        }
        echo "succeed";

}
    ?>  

