
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=lock;charset=utf8', 'root', '');

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


if (isset($_GET["f"]) && $_GET["f"]=="insert")
{
    $ma_date =date('Y-m-d H:m:s');
    $data=file_get_contents("php://input");

// Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO user (username, createdAt) VALUES(?, ?)');
    $req->execute(array($data,$ma_date));
}

$req->closeCursor();

?>