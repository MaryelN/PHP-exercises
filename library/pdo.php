<?php
  //constantes d'environemment
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "garage_v_parrot");

    //DSN de connexion
    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;
    
    // Se connecter à la base de façon securisé
    try{
      //Creer un instance PDO
      $db = new PDO($dsn, DBUSER, DBPASS);

      echo "On est connectés";

      // S'assurer d'envoyer les données en UTF8
      $db->exec("SET NAMES utf8");

      //Definir le mode "fetch" par défaut
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch(PDOException $e){
      die($e->getMessage());
    }
    //on est connectés à la base
    //on peut récupérer les liste de la base

    $sql = "SELECT * FROM `users`";

    //On exécute directement la requête
    $requete = $db->query($sql);

    //récupérer les données (fetch ou fetchAll)
    $user = $requete->fetchAll();

    echo"<pre>";
    var_dump($user[0]["email"]);
    echo"<pre>";

    //             CRUD PHP  
    //ajouter un user
    $sql = "INSERT INTO `users`(`username`, `password` ,`email`) VALUES ('Maria', '123', 'maria@gmail.com')";
    // $requete = $db->query($sql);

    //Modifier un utilisateur
    $sql = "UPDATE `users` SET `password` = 'password' WHERE `id` = 5";
    $requete = $db->query($sql);

    //Supprimer des utilisateurs ATTENTION à ajouter WHERE!
    $sql = "DELETE FROM `users` WHERE `id` > 5";
    // $requete = $db->query($sql);

    //Savoir combien de lignes on été supprimées

    echo $requete->rowCount();
  ?>