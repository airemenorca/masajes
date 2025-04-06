<?php
  $titulo = 'Nosotros';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Nosotros
          </h2>
              <p class="text-justify">Somos una empresa que tiene como objetivo dar a la ciudad de Punta arenas una experiencia única en un lugar acogedor, que invite a vivir momentos de cuidado personal que llenen el alma de nuestros clientes por dentro y por fuera.</p>
              <hr class="w-100">  
              <h2 class="text-center text-uppercase mt-5 encabezado">
                <span class="text-lowercase d-block">Conoce nuestras</span>instalaciones
              </h2>
              <div class="imagenes pt-4 pb-5">
                <a href="#" data-target="#imagen_1" data-toggle="modal">
                  <img src="img/galeria_mini_01.jpg" class="img-fluid py-4">
                </a>
                <a href="#" data-target="#imagen_2" data-toggle="modal">
                  <img src="img/galeria_mini_02.jpg" class="img-fluid py-4">
                </a>
                <a href="#" data-target="#imagen_3" data-toggle="modal">
                  <img src="img/galeria_mini_03.jpg" class="img-fluid py-4">
                </a>

                <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <img src="img/galeria_grande_01.jpg" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <img src="img/galeria_grande_02.jpg" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <img src="img/galeria_grande_03.jpg" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
        </main>
        
        <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
          <div class="sidebar horario">
            <h3 class="text-center text-uppercase mt-5">Horarios</h3>
            <p class="text-center mt-3 lead">Horarios de atencion sujetos a cambios, para consultas sobre atenciones especiales fuera de horarios contactanos via telefonica o mail.</p>
                <table class="table table-hover text-center mt-5">
                  <thead>
                      <tr>
                          <th class="text-center">Día</th>
                          <th class="text-center">De</th>
                          <th class="text-center">Hasta</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>Lunes</td>
                          <td>09:00</td>
                          <td>19:00</td>
                      </tr>
                      <tr>
                          <td>Martes</td>
                          <td>09:00</td>
                          <td>19:00</td>
                      </tr>
                      <tr>
                          <td>Miércoles</td>
                          <td>09:00</td>
                          <td>19:00</td>
                      </tr>
                      <tr>
                          <td>Jueves</td>
                          <td>09:00</td>
                          <td>19:00</td>
                      </tr>
                      <tr>
                          <td>Viernes</td>
                          <td>09:00</td>
                          <td>19:00</td>
                      </tr>
                      <tr>
                          <td>Sábado</td>
                          <td>10:00</td>
                          <td>14:00</td>
                      </tr>
                      <tr>
                          <td>Domingo</td>
                          <td>Cerrado</td>
                          <td>Cerrado</td>
                      </tr>
                  </tbody>
            </table>           
          </div>
        </aside>
        <hr class="w-100"> 
      </div>
    </div>  
<?php
  include 'templates/footer.php';    
?>