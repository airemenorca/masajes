<footer class="footer-sitio pt-3 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
            <p class="text-justify">Somos una empresa que tiene como objetivo dar a la ciudad de Punta arenas una experiencia única en un lugar acogedor, que invite a vivir momentos de cuidado personal que llenen el alma de nuestros clientes por dentro y por fuera.</p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase  pb-4">Horario</h3>
            <p>Lun-Vie: 9AM - 7PM</p>
            <p>Sabado: 10AM - 2PM</p>
            <p>Domingo: Cerrado</p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase  pb-4">Contacto</h3>
            <p>Bulnes #0001</p>
            <p>Punta Arenas</p>
            <nav class="sociales text-center text-lg-center">
              <ul>
                <li>
                  <a href="http://facebook.com">
                    <span class="sr-only">
                      Facebook
                    </span>          
                  </a>
                </li>
                <li>
                  <a href="Http://twitter.com">
                    <span class="sr-only">
                      Twitter
                    </span>
                  </a>
                </li>
                <li>
                  <a href="http://instagram.com">
                    <span class="sr-only">
                      Instagram
                    </span>
                  </a>
                </li>
                <li>
                  <a href="http://youtube.com">
                    <span class="sr-only">
                      Youtube
                    </span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <hr class="w-100">
            <p class="text-center copyright w-100">Carolina Spa & Salon 2020. Todos los derechos reservados</p>
        </div>
      </div>
    </footer>

    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

<?php 
  $fp = fopen($archivoCache, 'w');
  fwrite($fp, ob_get_contents());
  fclose($fp);
  ob_end_flush();
?>