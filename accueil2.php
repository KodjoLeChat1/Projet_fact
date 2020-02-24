<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Mon portfolio en ligne </title>
  <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</head>
  <body>

    <!-- header -->
    <header class="container-fluid header">
       <div class="container">
         <a href="accueil.php" class="logo">Mon portfolio</a>
         <nav class="menu">
           <a href="accueil.php"> Accueil </a>
           <a href="admin.php"> Administration </a>
           <a href="inscription.php"> Inscription </a>
           <a href="connexion.php"> Connexion  </a>
         </nav>

       </div>
    </header>
    <!-- fin header -->


    <!-- banniere -->
    <section class="container-fluid banner">
      <div class="ban">
        <img src="img/ban5.jpg" alt="banniere du site">
      </div>
      <div class="inner-banner">
        <h1> Bienvenue dans votre site </h1>
        <form class="form-group" action="connexion.php" method="POST">
          <button  class="btn btn-custom"> Connexion </button>
        </form>

      </div>
    </section>
    <!-- fin banner -->
