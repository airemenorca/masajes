<?php
  $titulo = 'Productos';
  include 'templates/header.php';
  include 'templates/navegacion.php';
  include 'inc/funciones.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/productos.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Productos</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4 productos">
    <hr class="w-100">  
      <div class="row">
        <main class="col-lg-12 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Productos
          </h2>
          <div class="row">
            <div class="card-columns">
              <?php

                $productos = obtenerProductos();

                while($producto = $productos->fetch_assoc()) {    
               
              ?>
              <div class="card">
                <a href="producto.php?id=<?php echo $producto['id']; ?>">
                  <img src="img/<?php echo $producto['imagen_mini']; ?>"
                   class="card-img-top img-fluid">
                    <h3 class="card-title text-center text-uppercase">
                    <?php echo $producto['nombre']; ?>
                    </h3>
                    <p class="card-text text-uppercase">
                    <?php echo $producto['descripcion_corta']; ?>
                    </p>
                    <p class="precio lead text-center mb-0"><?php echo $producto['precio']; ?></p>
                </a>
              </div>
              <?php }?>
            </div>
          </div>
        </main>
        <hr class="w-100">
      </div>
    </div>    
    <?php
  include 'templates/footer.php';    
?>