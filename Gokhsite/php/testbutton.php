<?php require_once(__DIR__ . '/header.php'); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOKHAN PROD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

        <div class="fondH1">

            <h1> <a href="home.html"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
            <div class="fondURL1">
                <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer">
                    <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

                </a>
            </div>
        </div>
    </header>
<style>
    .messageserver{
        position :absolute;
        top :170%;left:85%;
        display:block
        color:white;
    }

        .getvideo{
    position :absolute;
    top :160%;left:85%;

    font-size: 1em;
text-align: center;
color: #ff0000;
border: 3px solid #d6b409;
border-radius: 50px;
background: linear-gradient(to right, #ffe7b3, #ffdb38);
        }


        <main>



@media screen and (max-width: 768px)
{
    .getvideo{
    position :absolute;
    top :75%;left:85%;
    font-size: 0.6em;
    align-items: center;
}

    </style>

    <div class="mainFontDark"> <?php echo "test"; ?>
    <center><button id="getvideo" class="getvideo" onclick="getVideoSrcA()">Add to MyList</button>
</div>
<?php
// Vérifier si les données sont envoyées via POST
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['lienyt'])) {
    // Récupérer la valeur envoyée via POST
    $lienyt =  $_POST['lienyt'];
    // Afficher la valeur reçue


    $sqlQuery = 'SELECT * FROM ytlink where pseudo=:pseudo';
            
    $ytStatement = $mysqlClient->prepare($sqlQuery);
    $ytStatement->execute([
        ':pseudo' => $_SESSION['username'],
    ]);
    $ytlink = $ytStatement->fetchAll();
    $authenticated = false;$nb=0;
    // Vérifier si le pseudo est déjà utilisé
    foreach ($ytlink as $link) {
        if ($link['lien'] === $lienyt) {
            $authenticated = true; 
            break;
        }
        $nb++;
    }
    ob_start();
    $output = ob_get_clean();

    if ($authenticated) {
        echo 'nbmax';
        //echo json_encode(array('status' => 'same', 'message' => 'Lien déjà présent'));
       // echo json_encode(['status' => 'success']);
    } elseif ($nb >= 7) {
        echo 'nbmax';  // Si le nombre de vidéos est supérieur ou égal à 7   
}
else{
    $sqlQuery = 'INSERT INTO ytlink (pseudo,lien) VALUES (:pseudo, :lien)';
    $insert = $mysqlClient->prepare($sqlQuery);
    $insert->execute([
        ':pseudo' => $_SESSION['username'],
        ':lien' => $lienyt,
    ]);

    echo 'succeed';

}
$message="test";
}
?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="script.js"></script>
</main>
</body>
</html>