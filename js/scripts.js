(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName('needs-validation');
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          if (form.checkValidity() === false) {
            event.stopPropagation();
            console.log('Faltan datos');
          } else{ 
              //obtener valores de formulario
                var nombre = document.getElementById('nombre').value,
                    email = document.getElementById('email').value,
                    mensaje = document.getElementById('mensaje').value;
              // ejecutar con ajax
                var xhr = new XMLHttpRequest();

              // abrir la conexion
                xhr.open('POST', 'http://localhost:8888/WebSalonSpa/inc/enviar.php', true);
               
              // siempreque utilizas un formulario se debe agregar un header
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
              
              // revisar el estado
                xhr.onload = function() {
                  if( xhr.status === 200 ){
                    var respuesta = JSON.parse( xhr.responseText );
                    console.log(respuesta);
                    if(respuesta.respuesta === true ) 
                    {
                      console.log('Se envio correctamente');
                    }
                  }
              }

              //enviar el request
             xhr.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje);
                
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();