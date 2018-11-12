<div class="surfooter" id="surfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-3 hidden-xs">
            <h4>ClipDrone</h4>
            <p style="text-align: justify;">
                ClipDrone est une société basée dans le Val d'Oise qui propose des prestations professionnelles dans le domaine de la captation d'images aériennes par drone (images et vidéos) sur l'ensemble du territoire français.
            </p>
		
        </div>
        <div class="col-md-3 hidden-xs">
            <h4>Navigation</h4>
            <div class="list-group">
              <a href="/accueil" class="list-group-item">Accueil</a>
              <a href="/accueil#evenementiel" class="list-group-item menuLink" data-target="evenementiel">Evenementiel</a>
              <a href="/accueil#patrimoine" class="list-group-item menuLink" data-target="patrimoine">Patrimoine</a>
              <a href="/accueil#vuetechnique" class="list-group-item menuLink" data-target="vuetechnique">Vue technique</a>
              <a href="/accueil#formation" class="list-group-item menuLink" data-target="formation">Formation</a>
              <a href="/realisations" class="list-group-item">Réalisations</a>
              <a href="/contact" class="list-group-item">Contact</a>
            </div>
        </div>
        <div class="col-md-3 hidden-xs">
            <h4>Ils témoignent</h4>
            <p>Je suis ravi des prestations de ClipDrone, le personnel est ultra compétent, sympathique et le résultat est à couper le souffle.<span style="color:#b1b1b1"> - Maxime Vivas</span></p>
            <br/>  
            <p>Nous avons fait appel à ClipDrone pour une visite technique de notre relais chateau, nous avons maintenant des images époustouflantes de notre domaine. <span style="color:#b1b1b1"> - Christophe Durand</span></p>
        </div>
        <div class="col-md-3 col-xs-12">
		<h4>Contact</h4>
		<p>
			Site web:&nbsp;<a href="http://www.clipdrone.fr">http://www.clipdrone.fr</a>
			<br/>
			Téléphone:&nbsp;<a href="tel:+33613523697">+33 (0) 6 13 52 36 97</a>
			<br/>
		</p>
<br/>
            	<h4>Réglementation</h4>
		<div class="list-group">
			<a href="/docs/Attestation-du-depot-de-MAPGirard.pdf" class="list-group-item">Attestation dépôt MAP</a>
			<a href="/docs/Autorisation-préfecture-Val-d-Oise.pdf" class="list-group-item">Attestation préfecture du Val d'Oise</a>
			<a href="/docs/Certificat-d-aptitude-évaluation-théorique.jpg" class="list-group-item">Certificat d'aptitude</a>
			<a href="/docs/Declaration-activite-DGAC.pdf" class="list-group-item">Déclaration d'activité DGAC</a>
      		<a href="/mentions-legales" class="list-group-item">Mentions légales</a>

		</div>
            
            <!--<h4>Rejoignez-nous</h4>
            <a href="http://www.facebook.com/ClipDrone" target="_blank"><span class="social-media fb"></span></a>
            <a href="http://www.twitter.com/ClipDrone"><span class="social-media tw"></span></a>
            <a href="http://www.youtube.com/ClipDrone"><span class="social-media yt"></span></a>         
            -->
        </div>
      </div>
    </div>
  </div>

  <div id="footer" class="footer row">
    <div class="col-md-6 col-md-offset-3 col-xs-12 center">
      ClipDrone <small>&copy; 2018</small>
      &nbsp;&nbsp;<span style="color:#b1b1b1">|</span>&nbsp;&nbsp;
      Site web créé par Maxime Vivas
      &nbsp;&nbsp;<span style="color:#b1b1b1">|</span>&nbsp;&nbsp;
      VivaStudio
    </div>
  </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script type="text/javascript">
    /*!
     * IE10 viewport hack for Surface/desktop Windows 8 bug
     * Copyright 2014-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     */

    // See the Getting Started docs for more information:
    // http://getbootstrap.com/getting-started/#support-ie10-width

    (function () {
      'use strict';

      if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style')
        msViewportStyle.appendChild(
          document.createTextNode(
            '@-ms-viewport{width:auto!important}'
          )
        )
        document.querySelector('head').appendChild(msViewportStyle)
      }

    })();
</script>

  <script type="text/javascript">
    $(document).ready(function(){
        $(this).scrollTop(0);
        $url = $(location).attr('href');
        var target = "navbar";
        //on mets en place la classe active dans le menu
        if ($url.indexOf("evenementiel") > -1 ) {
          $("#prestationsMenu").addClass("active");
          target = "evenementiel";
        } else if ($url.indexOf("vuetechnique") > -1 ){
          $("#prestationsMenu").addClass("active");
          target = "vuetechnique";
        } else if ($url.indexOf("patrimoine") > -1 ) {
          $("#prestationsMenu").addClass("active");
          target = "patrimoine";
        } else if ($url.indexOf("realisations") > -1 ) {
          $("#realisationsMenu").addClass("active");
        } else if ($url.indexOf("contact") > -1 ) {
          $("#contactMenu").addClass("active");
        } else if ($url.indexOf("details") > -1 ) {
          $("#realisationsMenu").addClass("active");
        } else if ($url.indexOf("formation") > -1 ) {
          $("#prestationsMenu").addClass("active");
          target = "formation";
        } else {
          $("#homeMenu").addClass("active");
          target = "navbar";
        }

        $(".menuLink").click(function(evt) {
            if (target == "myCarousel" || target == "evenementiel" || target == "vuetechnique" || target == "patrimoine" || target == "formation") {
              //on est deja sur la page d'accueil donc on empeche le chargement de la page
              evt.preventDefault();
            }
            target = $(this).data("target");
            $('html, body').animate({
                scrollTop: $("#"+target).offset().top - 50
            }, 500);
            //on enleve les class active du menu
            $("#topMenu li").each(function(){
                $(this).removeClass('active');
            });
            if (target == "myCarousel") {
              $("#homeMenu").addClass("active");
            } else {
              $("#prestationsMenu").addClass("active");  
            }
            
        });

        $('html, body').animate({
              scrollTop: $("#"+target).offset().top - 50
          }, 500);

    });
  </script>
