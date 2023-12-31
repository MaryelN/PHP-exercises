<?php 
  //Chercher les articles dans la base
  //On se connecte à la base
  require_once"library/pdo.php";

  //On recupere les articles
  $sql = "SELECT * FROM `services` WHERE `id` < 3";

  //on execute
  $requete = $pdo->query($sql);

  //recupere les données
  $services =$requete->fetchAll();


  // Pour changer le titre de la page
  $titre = "Liste des articles";
  

  include_once "includes/header.php";
  include_once "includes/navbar.php";

?>
<h1>PAGE ARTICLES</h1>

<p>Liste des Services</p>

<section>
<?php foreach($services as $service) {;?>
  <article>
  <h1><a href="article.php?id=<?= $service["id"] ?>"><?= strip_tags($service["name"]) ?></a></h1>
    <p><?=$service["description"];?></p>
  </article>
  <?php }; ?>
</section>

<!-- strip_tags() dans php nous aide a convertir le code de autres langagues en html code -->
<?php include_once "includes/header.php"; ?>