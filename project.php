
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ClipDrone - ">
    <meta name="author" content="Maxime Vivas - Vivastudio">
    <link rel="icon" href="img/favicon.png">

    <title>ClipDrone - Gite à Cabourg</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/clipdrone.css" rel="stylesheet"/>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


  </head>

  <body>
    <?php include('navbar.php'); ?>

    <div id="technicalview" style="margin-top:70px; border-top: 10px solid #00C3FE; display: none;">
      <div class="container">
        <h1 class="page-header">{{realisation.name}}</h1>

        <div class="row">
            <div class="col-md-8">
                <iframe width="700" height="400" v-bind:src="realisation.video" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <h3>Description</h3>
                <p>{{realisation.description}}</p>
                <br/>
                <h4>
                    <span class="label label-primary mrg-r-5" v-for="cat in realisation.category">{{cat}}</span>
                </h4>
            </div>
        </div>

        <br/>
      </div>
      <br/>

    </div>

   <?php include('footer.php'); ?>


   <script type="text/javascript">
        var app = new Vue({
        			el: '#technicalview',
        			data () {
        				return {
        					realisation : {"name":""}
        				}
        			},
        			created: function () {
                        $("#technicalview").show();
        			},
        			mounted () {
        				var self = this;
        				axios
        				  .get('json/realisations.json')
        				  .then(function (response) {
        				  	response.data.forEach(realisation => {
        				  	    if (realisation.link == "<?php echo substr($_SERVER['REQUEST_URI'], 1); ?>") {
                                    self.realisation = realisation;
        				  	    }
        					})
        				  });
        			}
        		});
   </script>

</body>
</html>
