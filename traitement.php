<?php
// Connexion à la base de données
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=enterprise_db)', 'root', '',
$pdo_options);
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO Administrateur (pseudo, password)
VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['password']));

header('Location: index.php');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>
