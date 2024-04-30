<?php
// Connexion à la base de données
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',
$pdo_options);
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO Administrateur (e-mail, password)
VALUES(?, ?)');
$req->execute(array($_POST['e-mail'], $_POST['password']));
// Redirection du visiteur vers la page du minichat
header('Location: index.php');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>