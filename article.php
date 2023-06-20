<?php 

  //On vérifie si on a un id
  if(isset($_GET["id"]) && !empty($_GET["id"]))
  //Chercher les articles dans la base
  //On se connecte à la base
  require_once"library/pdo.php";

  include_once "includes/header.php";
  include_once "includes/navbar.php";
  include_once "articles.php";

?>
<h1>PAGE ARTICLES</h1>

<p>Liste des Services</p>

<section>
  <article>
    <h1><?= strip_tags($service["name"]) ?></h1>
    <p><?=$service["description"];?></p>
    <p><?=$service["price"];?></p>
  </article>
</section>

<!-- strip_tags() dans php nous aide a convertir le code de autres langagues en html code -->
<?php include_once "includes/header.php"; ?>