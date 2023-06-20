<?php 

@include_once "includes/header.php";

@include_once "includes/navbar.php";

?>
<h1>PAGE ACCUEIL</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed cupiditate impedit, odit excepturi quas voluptatibus consequatur. Quas nobis ad facere. Sed, voluptatem? Perferendis, consequuntur molestias!</p>

<?php
require_once "library/pdo.php";

$username = "Maria";
$password = "password";

//Preparation de requete pour eviter injections sql
$sql = "SELECT * FROM `users` WHERE `username` =:username AND `password` =:pass";

//Preparer
$requete = $pdo->prepare($sql);

//Injecter les valeurs "binValue"
$requete->bindParam(":username", $username, PDO::PARAM_STR);
$requete->bindValue(":pass", $password, PDO::PARAM_STR);

//exécute
$requete->execute();

$user = $requete->fetchAll();

var_dump($user);

@include_once "includes/footer.php";

?>