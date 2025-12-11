
<?php require_once(__DIR__ . '/header.php'); ?>


<style>

.login-container {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    position : absolute;
    top : 30em;
    top: 10%; /* Positionne la boîte à 50% de la hauteur de la page */
left: 50%; /* Positionne la boîte à 50% de la largeur de la page */
transform: translate(-50%, 50%); /* Ajuste la boîte pour la centrer parfaitement */
}
.login-container input {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.login-container button {
    width: 200px;
    padding: 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.login-container  button:hover {
    background-color: #0056b3;
}
</style>


<body>

<?php require_once(__DIR__ . '/nav.php'); ?>


<main>

<?php if (!isset($_SESSION['username'])) : ?>

    <div class="login-container">
        <h3>Entrez votre adresse e-mail pour récuperer vos identifiants</h3>
        <form method="POST" action="">
            <input type="email" name="mail" placeholder="Nom d'utilisateur" required>
            <button type="submit">Submit</button>
        </form>
        <h3>ou bien entrez votre pseudo</h3>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <button type="submit">Submit</button>
        <?php
        // Vérifie si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) ) {
            $username = $_POST['username'];

            // On récupère tout le contenu de la table users
            $sqlQuery = 'SELECT * FROM users where pseudo= :pseudo';
            
            $usersStatement = $mysqlClient->prepare($sqlQuery);
            $usersStatement->execute(([
                ':pseudo' => $username,
            ]));
            $users = $usersStatement->fetchAll();

            // Vérifier si le pseudo est déjà utilisé
           $mail= $users[0]['mail'];
           $mdp= $users[0]['mdp'];

            // Si le pseudo est déjà utilisé
            if ($mail==="") {
                echo "mail non renseigné";

            } else {
                $to = $mail; // Adresse de destination
$subject = "identifiants gokhanprod website"; // Sujet de l'email
$message = "pseudo : ".$username." ,mdp : ".$mdp ; // Contenu de l'email
$headers = "From: droneuramateur@gmail.com\r\n" .
           "Reply-To:  droneuramateur@gmail.com\r\n" .
           "X-Mailer: PHP/" . phpversion(); // Entête pour spécifier l'adresse de l'expéditeur

// Envoi de l'email
if(mail($to, $subject, $message, $headers)) {
    echo "L'email a été envoyé avec succès.";
} else {
    echo "L'email n'a pas pu être envoyé.";
}

            }

        }
        ?>

    </div>
<?php else : ?>
    <p style='color: green; text-align: center;'>Vous êtes déjà connecté en tant que <?= htmlspecialchars($_SESSION['username']); ?></p>
    <form method="POST" action="">
        <input type="hidden" name="deconnexion" value="true" />
        <button type="submit">Se déconnecter</button>
    </form>
<?php endif; ?>
</main>

</body>
<script src="script.js"></script>

<?php require_once(__DIR__ . '/footer.php'); ?>
</html>
