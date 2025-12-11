
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
        <h2>Inscription</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Soumettre</button>
        </form>

        <?php
        // Vérifie si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $authenticated = false;
            $message = '';

            // On récupère tout le contenu de la table users
            $sqlQuery = 'SELECT * FROM users';
            
            $usersStatement = $mysqlClient->prepare($sqlQuery);
            $usersStatement->execute();
            $users = $usersStatement->fetchAll();

            // Vérifier si le pseudo est déjà utilisé
            foreach ($users as $user) {
                if ($user['pseudo'] === $username) {
                    $authenticated = true;
                    break;
                }
            }

            // Si le pseudo est déjà utilisé
            if ($authenticated) {
                echo "pseudo déja utilisé";

            } else {
                // Insérer l'utilisateur dans la base de données
                $sqlQuery = 'INSERT INTO users (pseudo, mdp) VALUES (:pseudo, :mdp)';
                $insert = $mysqlClient->prepare($sqlQuery);
                $insert->execute([
                    ':pseudo' => $username,
                    ':mdp' => $password,
                ]);
                echo "<center>Vous pouvez maintenant vous connecter, vous allez etre rediriger dans 5s</center>";
                echo '<meta http-equiv="refresh" content="3;url=login.php">';

            }

        }
        ?>
            <p>Pour se connecter <a href ="login.php">cliquez ici</a></p>

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
