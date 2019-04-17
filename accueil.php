<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="log.css" media="screen" />
  </head>
  <body>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
          <img src="https://upload.wikimedia.org/wikipedia/fr/f/f3/Groupe_BPCE.png" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form method="post" action="index.php">
          <input type="text" id="login" class="fadeIn second" name="nb_siret" placeholder="Entrez le SIRET">
          <input type="submit" class="fadeIn fourth" value="GO">
        </form>
      </div>
    </div>

  </body>
</html>
