

<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=noel;charset=utf8', 'root', '');

    echo 'noel le roi arthur';
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

/*$req = $bdd->prepare('SELECT username FROM user WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
$req->execute(array($_GET['possesseur'], $_GET['prix_max']));*/

if (isset($_POST["username"]) && !empty($_POST["username"]))
{
// Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO noel (username, password) VALUES(?, ?)');
    $req->execute(array($_POST['username'], $_POST['password']));
}

// Redirection du visiteur vers la page du minichat

//header('Location: facebook.php');

echo '<ul>';
while ($donnees = $req->fetch()) {
    echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
}
echo '</ul>';

$req->closeCursor();

?>