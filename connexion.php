<?php
/*session_start();
$bdd = new PDO('mysql:host=127.0.0.1; dbname=projet', 'root', '');

  if(isset($_POST['forminscription']))
  {
    $emailconnect = htmlspecialchars($_POST['emailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);

    if(!empty($emailconnect) AND !empty($mdpconnect))
    {
      $requser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
      $requser->execute(array($emailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1)
      {
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['nom'] = $userinfo['nom'];
        $_SESSION['prenom'] = $userinfo['prenom'];
        $_SESSION['email'] = $userinfo['email'];
        header("Location: profil.php?id=" .$_SESSION['id']);
      }else {
        $erreur = "Email ou mot de passe incorrect !";
      }

    }else {
      $erreur = "Tous les champs doivent etre renseigner";
    }

  }*/

?>

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
          <a href="admin.php"> Administrateur </a>
          <a href="inscription.php"> Inscription </a>
        </nav>

      </div>
   </header>
   <!-- fin header -->

    <div class="container">

    <br>
      <?php if (isset($erreur)): ?>
          <div class="alert alert-danger">
              <?php echo '<i class="fa fa-exclamation-triangle" style="font-size:18px"></i>  ' .$erreur; ?>
          </div>
      <?php endif; ?>
    </br>
    <p> <h3 style="margin-left:15px"> Connexion</h3> </p>
    <br>
        <form class="col-lg-6" action="" method="POST">
      		<div class="form-group">

      			<label for="3">Email</label>
      			<input type="email" name="emailconnect" class="form-control" value="<?php if(isset($emailconnect)){ echo $emailconnect;} ?>">

      		</div>
      		<div class="form-group">

      			<label for="3">Mot de passe</label>
      			<input type="password" name="mdpconnect" class="form-control">

      		</div>

      		<button type="submit" name="forminscription" class="btn btn-primary">Connexion</button>

      	</form>
      </br>
      <p>Vous n'etes pas encore inscrit ?<a href="inscription.php"> S'inscrire</a></p>
    </div>

  </body>
</html>
