<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="ClipDrone - Images aériennes par drone - Société basée dans le Val d'Oise qui propose des prestations professionnelles dans le domaine de la captation d'images aériennes par drone (images et vidéos) sur l'ensemble du territoire français."/>
		<meta name="author" content="Maxime Vivas - Vivastudio"/>
		<link rel="icon" href="img/favicon.png"/>

		<title>ClipDrone - Drone - Photographie et vidéo par drone dans le Val d'Oise et l'Ile de France</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet"/>
		<link href="css/bootstrap-theme.css" rel="stylesheet"/>
		<link href="css/clipdrone.css" rel="stylesheet"/>

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

		<script src="js/jquery-3.3.1.min.js"></script>

	</head>

	<body>
        <?php include('navbar.php'); ?>

		<div id="technicalview" style="margin-top:70px; border-top: 10px solid #00C3FE;">
			<div class="container" id="portfolio">
				<h1>Découvrez nos réalisations</h1>

				<ul class="nav nav-pills" id="filters">
					<li class="active" data-filter="all"><a href="#">Tous</a></li>
					<li v-on:click="filter('photo')" ><a href="#">Photo</a></li>
					<li v-on:click="filter('video')" ><a href="#">Vidéos</a></li>
					<li v-on:click="filter('evenementiel')" ><a href="#">Evenementiel</a></li>
					<li v-on:click="filter('patrimoine')" ><a href="#">Patrimoine</a></li>
					<li v-on:click="filter('technic')" ><a href="#">Vue technique</a></li>
				</ul>

				<br/>

				<div class="row" >
					<div v-for="realisation in realisations" class="col-md-3 card zoom" :class="{'card-show': realisation.show, 'card-hidden': realisation.hidden }">
						<div>
							<a :href="realisation.link"><img :src="realisation.miniature" :alt="realisation.name" width="100%"></a>
							<a :href="realisation.link"><h5>{{realisation.name}}</h5></a>
							<span class="label label-primary mrg-r-5" v-for="cat in realisation.category">{{cat}}</span>
						</div>
					</div>

				</div>
			</div>
		</div>

   <?php include('footer.php'); ?>

	<script>

		var app = new Vue({
			el: '#portfolio',
			data () {
				return {
					realisations : []
				}
			},
			created: function () {
			},
			mounted () {
				var self = this;
				self.realisations = [];
				axios
				  .get('json/realisations.json')
				  .then(function (response) {
				  	response.data.forEach(realisation => {
						realisation.hidden = false;
						self.realisations.push(realisation);
					})
				  });
			},
			methods: {
				filter: function(filter) {
					$.each(this.realisations, function (index, realisation) {

						setTimeout(function() {
							if (realisation.category.indexOf(filter) > -1) {
								realisation.hidden = false;
								realisation.show = true;
							} else {
								realisation.hidden = true;
								realisation.show = false;
							}
						}, index*50);
					});
				}
			}
		})
	</script>

	</body>
</html>