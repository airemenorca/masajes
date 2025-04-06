<?php
  $titulo = 'Contacto';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/contacto.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Contacto</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
    <hr class="w-100">  
      <div class="row justify-content-center ">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Contacto
          </h2>
          <form class="p-5 mt-5 formulario-contacto needs-validation" novalidate>
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" placeholder="Tu Nombre" required>
              <div class="invalid-feedback">
                El Nombre es obligatorio.
              </div>
              <div class="valid-feedback">
                Correcto.
              </div>
            </div>
            <div class="form-group">
              <label for="nombre">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Tu Email" required>
              <div class="invalid-feedback">
                El Email es obligatorio.
              </div>
              <div class="valid-feedback">
                Correcto.
              </div>
            </div>
            <div class="form-group">
              <label for="nombre">Mensaje:</label>
              <textarea id="mensaje" class="form-control" cols="30" rows="2" required></textarea>
              <div class="invalid-feedback">
                El Mensaje es obligatorio.
              </div>
              <div class="valid-feedback">
                Correcto.
              </div>
            </div>
            <input type="submit" class="btn btn-primary text-uppercase" value="Enviar">
          </form>
        </main>
      </div>
      <hr class="w-100 mt-5">  
    </div>
    <?php
  include 'templates/footer.php';    
?>