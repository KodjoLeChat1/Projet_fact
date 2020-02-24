<?php
/*$bdd = new PDO('mysql:host=127.0.0.1; dbname=projet', 'root', '');

  if(isset($_POST['forminscription']))
  {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']);
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
    {
        $nomlength = strlen($nom);
        $prenomlength = strlen($prenom);
        $emaillength = strlen($email);
        if($nomlength <= 255)
        {
            if($prenomlength <= 255)
            {
                if($emaillength <= 255)
                {
                        if(filter_var($email, FILTER_VALIDATE_EMAIL))
                        {
                          $reqmail = $bdd->prepare("SELECT * FROM users WHERE email = ?");
                          $reqmail->execute(array($email));
                          $mailexist = $reqmail->rowCount();
                            if($mailexist == 0)
                            {
                                if($mdp == $mdp2)
                                {
                                  $insertmbr = $bdd->prepare("INSERT INTO users(nom, prenom, email, password, confirme) VALUES(?, ?, ?, ?, 0)");
                                  $insertmbr->execute(array($nom, $prenom, $email, $mdp));
                                  $erreur2 = "Votre compte a bien ete creer .<a href=\"connexion.php\">Se connecter</a>";
                                }else {
                                  $erreur = "Vos mot de passe ne correspondent pas !";
                                }
                            }else {
                               $erreur = "Cet adresse mail est deja utilise";
                            }
                        }else {
                          $erreur = "Votre adresse mail n'est pas valide";
                        }
                }else {
                  $erreur = "Votre email ne doit pas depasser 255 caracteres";
                }
            }else {
              $erreur = "Votre prenom ne doit pas depasser 255 caracteres";
            }
        }else {
          $erreur = "Votre nom ne doit pas depasser 255 caracteres";
        }
    }else {

      $erreur = " Attention tous les champs doivent etre renseigner";
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
        <a href="accueil.php" class="logo">Port du Havre</a>
        <nav class="menu">
          <a href="accueil.php"> Accueil </a>
          <a href="admin.php"> Administration </a>
          <a href="connexion.php"><i class="fa fa-sign-in" style="font-size:15px"></i> Connexion </a>
        </nav>

      </div>
   </header>
   <!-- fin header -->
    <div class="container">
    <br /><br />
      <?php if (isset($erreur2)): ?>
          <div class="alert alert-success">
              <?php echo '<i class="fa fa-check-square" style="font-size:20px"></i>  '  .$erreur2; ?>
          </div>
      <?php endif; ?>

      <?php if (isset($erreur)): ?>
          <div class="alert alert-danger">
              <?php echo '<i class="fa fa-exclamation-triangle" style="font-size:18px"></i>  ' .$erreur; ?>
          </div>
      <?php endif; ?>
    <br />
    <p> <h3 style="margin-left:15px">Inscription</h3> </p>
    <br>
        <form class="col-lg-6" action="" method="POST">
      		<div class="form-group">

      			<label for="3">Nom *</label>
      			<input type="text" name="nom" class="form-control" >

      		</div>
          <div class="form-group">

      			<label for="3">Prenom *</label>
      			<input type="text" name="prenom" class="form-control" >

      		</div>
      		<div class="form-group">

      			<label for="3">Email *</label>
      			<input type="text" name="email" class="form-control" >

      		</div>
          <div class="form-group">

            <label for="3">Tel *</label>
            <input type="text" name="tel" class="form-control" >

          </div>
          <div class="form-group">

            <label for="3">Profession *</label>
            <input type="text" name="profession" class="form-control" >

          </div>
      		<div class="form-group">

      			<label for="3">Mot de passe *</label>
      			<input type="password" name="mdp" class="form-control">

      		</div>
      		<div class="form-group">

      			<label for="3">Confirmer votre mot de passe *</label>
      			<input type="password" name="mdp2" class="form-control">

      		</div>

      		<button type="submit" name="forminscription" class="btn btn-primary">S'inscrire</button>

      	</form>
        <p>Etes vous deja inscrit ?<a href="connexion.php"> Se connecter</a></p>
      </br>
    </div>

  </body>
</html>
