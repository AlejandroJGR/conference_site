  <footer class="site-footer">
      <div class="contenedor clearfix">
        <div class="footer-informacion">
          <h3>Sobre <span>GdlWebCamp</span></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam odit officia blanditiis incidunt quae quibusdam perferendis eum. Corrupti magnam magni sit at dolor veniam earum nobis aut est totam! Pariatur?</p>
          </div>
        <div class="ultimos-tweets">
          <h3>Últimos <span>Tweets</span></h3>
         <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ad, nihil amet iusto aliquam inciduntibus tempora ad dicta.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ad, nihil amet iusto aliquam inciduntibus tempora ad dicta.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ad, nihil amet iusto aliquam inciduntibus tempora ad dicta.</li>
          </ul>
        </div>
        <div class="menu">
          <h3>Redes <span>Sociales</span></h3>
          <nav class="redes-sociales">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </nav>
        </div>
      </div>
       <p class="copyright">Todos los derechos reservados GdlWebCamp 2021.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.animateNumber.js"></script>
    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);
      if($pagina == "invitados" || $pagina == "index"){
        echo '<script src="js/jquery.colorbox-min.js"></script>';
      }else if($pagina == "conferencia"){
        echo '<script src="js/lightbox.js"></script>';
      }
    ?>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="js/main.js"></script>
</body>
</html>
