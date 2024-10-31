<?php


// Récupération des variables à l'aide du client MySQL
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();  //on execute la requête préparée
$users = $usersStatement->fetchAll();  //fetchAll() renvoie tous les résultats sous forme de tableau

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE is_enabled is TRUE');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

?>
