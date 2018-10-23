
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="ClipDrone - ">
    <meta name="author" content="Maxime Vivas - Vivastudio">
    <link rel="icon" href="img/favicon.png">

    <title>ClipDrone - Drone - Photographie et vidéo par drone dans le Val d'Oise et l'Ile de France</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/carousel.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
   <?php include('navbar.php'); ?>

  <div id="mapArea" style="height:400px; border-bottom: 10px solid #00C3FE; background-image: url('img/contact.jpeg');background-size: 100%;background-position: center">

  </div>

  <div id="patrimoine" class="marketting-area" style="background: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <?php
                  if (isset($_POST['nom']) && $_POST['nom'] != '') {
                    if ( (isset($_POST['adrmail']) && $_POST['adrmail'] != '') && (isset($_POST['message']) && $_POST['message'] != '')) {
                        $html = '<html><head><meta charset="utf-8"></head><body>';
                        $html .= '<h1>Bonjour Didier </h1>';
                        $html .= $_POST['nom'].' - '.$_POST['adrmail'].' vous a contacté via le site ClipDrone.<br/><br/>';
                        $html .= $_POST['message'].'<br/><br/>';
                        $html .= 'Merci de le recontacter dans les plus brefs délais.<br/>Cordialement, <br/>Site ClipDrone</body></html>';
                        $headers = "From: \"Site ClipDrone\"<no-reply@top-drone.com>\n";
                        $headers .= "Content-Type: text/html; charset=\"utf-8\"";
                        mail("girard-didier@club-internet.fr", "Demande de contact ClipDrone", $html, $headers);
                        echo'<div id="successArea" class="alert alert-success"><b>C\'est fait!</b> Un email nous a été envoyé, nous vous recontacterons dans les plus brefs délais.</div>';
                    } else {
                        echo' <div id="errorArea" class="alert alert-danger"><b>Erreur!</b> Veuillez remplir correctement le formulaire.</div>';
                    }
                  }
              ?>
              <h3>Demande de contact</h3>
                <form method="post" action="/contact">

                 <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user"> </span>
                    <input type="text" name="nom" class="form-control" placeholder="Prénom Nom">
                  </div>
                  <br/>
                  <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-envelope"> </span>
                    <input type="text" name="adrmail" class="form-control" placeholder="Adresse mail">
                  </div>
                  <br/>
                  <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-comment"> </span>
                    <textarea name="message" class="form-control" placeholder="Votre message" style="height: 150px; max-height: 150px;"></textarea>
                  </div>
                  <br/>
                  <div style="text-align:center">
                    <input type="submit" value="Envoyer" class="btn btn-primary">
                  </div>
                </form>
            </div>
            <div class="col-md-4 col-md-offset-2">
              <h3>Coordonnées</h3>
              <p>
                Site web:&nbsp;<a href="http://www.clipdrone.fr">http://www.clipdrone.fr</a>
                <br/>
                Téléphone:&nbsp;<a href="tel:+33613523697">+33 (0) 6 13 52 36 97</a>
                <br/><br/>
                Adresse postale:<br/>
                <span style="color: #00C3FE;">
                  ClipDrone <br/>
                  1 allée Ravel<br/>
                  95130 Le Plessis-Bouchard
                </span>
              </p>
            </div>
        </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

</body>
</html>
