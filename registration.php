<?php

include 'connect.php';

$bdd = connectToSQL();


$req = $bdd->prepare('INSERT INTO acces(nom, prenom, email, password) VALUES(?,?,?,?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password']));


header('location: index.php');

?>