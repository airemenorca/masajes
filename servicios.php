<?php
  $titulo = 'Servicios';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/servicios.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
        </div>
      </div>
      <hr class="w-100">  
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Servicios
          </h2>
          
          <div id="servicios">
            <div class="card">
              <div class="card-header" id="servicio1">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">
                    Servicio 1
                  </button>
                </h2>
              </div>
              <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                <div class="card-body">textoooooooooooooooooooooooooooooooooooo</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="servicio2">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">
                    Servicio 2
                  </button>
                </h2>
              </div>
              <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                <div class="card-body">textoooooooooooooooooooooooooooooooooooo</div>
              </div>
            </div>  
            <div class="card">
              <div class="card-header" id="servicio3">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">
                    Servicio 3
                  </button>
                </h2>
              </div>
              <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                <div class="card-body">textoooooooooooooooooooooooooooooooooooo</div>
              </div>
            </div>   
            
          </div>

        </main>
        <aside class="col-lg-4 md-pt-4 pt-lg-4">
          <div class="sidebar p-3">
            <h2 class="text-center text-uppercase mt-4">Nuevos Clientes</h2>
            <p class="lead text-center mt-4">
              Recibe 20% de descuento con este cupon
            </p>
              
            <div class="cupon px-2 py-5 mt-5">
              <p class="text-uppercase text-center mb-0">
                <span class="display-4">20% Descuento</span><br/>
                en todos los servicios
              </p>
            </div>
          </div>
        </aside>
      </div>
      <hr class="w-100">  
    </div>
<?php
  include 'templates/citas.php';
  include 'templates/footer.php';    
?>