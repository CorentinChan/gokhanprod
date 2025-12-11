
<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deconnexion'])) {
    session_destroy();
    setcookie("LOGGED_USER", "", time() - 3600, "/", "", true, true); // Supprime le cookie
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>


<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>




