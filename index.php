<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conexa</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet">    
  </head>
  <body>
    <nav class="navbar sticky-top py-3 nav_fondo_new navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler"   type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ps-lg-5" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sedes</a>
            </li>
          </ul>
          <div class="d-flex align-items-center">
            <a href="" class="login_a_contacto">Contácto</a>
            <a href="" class="login_a">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <main>
      

      <section class="section_main pb-5">

        <div class="banner_section position-relative">
          <img src="assets/img/banner2.png" class="w-100">
        </div>

        <?php include 'numero-contacto.php'; ?>
        <?php include 'planes.php'; ?>

      </section>

      <section class="section_formulario py-5">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 text-center">
              <h2>Contáctanos</h2>
              <p>Déjanos tu información para que puedas disfrutar de un día de prueba o un recorrido gratis.</p>
            </div>
            <div class="col-lg-8">
                <form method="POST" action="" id="miFormulario" class="row justify-content-md-center align-items-center">
                  <div class="section_elegir_opcion col-lg-12">
                    <ul class="w-100 ul_opciones" id="planesList">
                    <li data-plan="Coworking" onclick="seleccionarPlan(this)">
                      <div class="div-b text-center">
                        <div class="alto_img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="32" viewBox="0 0 26 32"><path d="M8.711 30.896h11.98v-1.103H8.711v1.103zm15.792-24.69l-5.309 5.38c-2.995-3.449-3.948-6.896-2.723-8.137 1.225-1.104 4.628-.276 8.032 2.758zM14.7 27.035h-.272L3.13 15.724c.137-.276.137-.413.137-.69 0-.275 0-.551-.137-.69L13.884 3.31h.682c.272 0 .543-.137.817-.276-1.499 2.07.135 6.483 3.811 10.208L26 6.207C22.324 2.482 17.97.965 15.927 2.482c.136-.275.272-.551.272-.827C16.2.689 15.52 0 14.566 0s-1.633.69-1.633 1.655c0 .276 0 .552.134.69L2.314 13.379c-.272-.137-.408-.137-.681-.137C.68 13.242 0 13.93 0 14.896c0 .967.681 1.656 1.633 1.656.273 0 .545 0 .681-.139l11.162 11.173c-.272.276-.409.69-.409 1.104H7.623V32l14.158-.137V28.55h-5.446c0-.826-.681-1.517-1.634-1.517z" fill="#323232" fill-rule="evenodd"/></svg>                          
                        </div>                        
                        <br>
                        <p>Coworking</p>
                      </div>
                    </li>
                    <li data-plan="Escritorio Exclusivo" onclick="seleccionarPlan(this)">
                      <div class="div-b text-center">
                        <div class="alto_img">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="34" viewBox="0 0 31 34"><defs><path id="a" d="M0 .013h30.87V34H0z"/></defs><g fill="none" fill-rule="evenodd"><g transform="translate(0 -.012)"><mask id="b" fill="#fff"><use xlink:href="#a"/></mask><path d="M15.434.948c-.623 0-1.247.155-1.715.468L2.962 7.651c-.935.623-1.716 1.87-1.716 3.118v12.317c0 1.09.781 2.494 1.716 3.117l10.757 6.237c.468.311 1.092.467 1.715.467.624 0 1.248-.156 1.716-.467l10.757-6.237c.935-.623 1.715-1.87 1.715-3.117V10.77c0-1.091-.78-2.495-1.715-3.118L17.15 1.415c-.313-.312-.936-.468-1.716-.468m0 33.054c-.935 0-1.715-.157-2.338-.624L2.338 27.139C1.091 26.518 0 24.646 0 23.244V10.926c0-1.56 1.092-3.275 2.34-4.054L13.095.634c.623-.311 1.56-.623 2.338-.623.78 0 1.716.157 2.34.623L28.53 6.873c1.403.78 2.34 2.495 2.34 4.055v12.316c0 1.559-1.093 3.274-2.34 4.054l-10.758 6.235c-.468.312-1.403.469-2.339.469" fill="#323232" mask="url(#b)"/></g><path d="M15.434 5.3c-2.026 0-3.74 1.716-3.74 3.743 0 2.182 1.87 5.768 3.74 5.768 1.871 0 3.742-3.586 3.742-5.768.156-2.183-1.558-3.742-3.742-3.742m0 10.757c-2.962 0-4.988-4.521-4.988-7.015 0-2.651 2.182-4.99 4.988-4.99 2.807 0 4.99 2.184 4.99 4.99 0 2.494-2.027 7.015-4.99 7.015m8.887 10.29c-.312 0-.623-.312-.623-.624 0-4.209-3.742-7.639-8.264-7.639-4.52 0-8.262 3.43-8.262 7.64 0 .311-.312.623-.624.623s-.623-.312-.623-.624c0-4.833 4.208-8.73 9.509-8.73 5.302 0 9.511 3.897 9.511 8.73 0 .312-.156.624-.624.624" fill="#323232"/></g></svg>                          
                        </div>
                        <p>Escritorio Exclusivo</p>
                      </div>
                    </li>
                    <li data-plan="Oficina Exclusiva" onclick="seleccionarPlan(this)">
                      <div class="div-b text-center">
                        <div class="alto_img">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="35" viewBox="0 0 25 35"><defs><path id="a" d="M0 .077h24.945v30.558H.001z"/></defs><g fill="none" fill-rule="evenodd"><path d="M5.613 33.208c0 .936-.78 1.56-1.56 1.715-.934 0-1.558-.779-1.714-1.559 0-.935.78-1.559 1.559-1.715.936 0 1.715.78 1.715 1.56m8.73-.001c0 .936-.779 1.56-1.559 1.715-.935 0-1.559-.779-1.714-1.559 0-.935.779-1.559 1.558-1.715.936 0 1.715.623 1.715 1.56m8.732-.001c0 .936-.78 1.56-1.56 1.715-.936 0-1.559-.779-1.715-1.559 0-.935.78-1.559 1.56-1.715.936-.156 1.715.623 1.715 1.56" fill="#323232"/><g transform="translate(0 -.077)"><mask id="b" fill="#fff"><use xlink:href="#a"/></mask><path d="M5.613 19.721a1.065 1.065 0 0 1-1.091-1.09v-1.093c0-.623.467-1.09 1.09-1.09h14.189c.624 0 1.09.467 1.09 1.09v1.092c0 .623-.466 1.091-1.09 1.091H5.613zM5.457 2.415c0-.623.468-1.09 1.092-1.09h12.004c.624 0 1.09.467 1.09 1.09l-1.09 13.097H6.549L5.457 2.415zm16.37 8.575v1.092h1.092v5.456c0 .936-.468 1.715-1.247 2.027.156-.312.156-.623.156-.935v-1.092c0-1.247-.936-2.182-2.184-2.182L20.736 2.26c0-1.248-.935-2.183-2.183-2.183H6.549c-1.248 0-2.183.935-2.183 2.183l1.09 13.096c-1.246 0-2.182.935-2.182 2.182v1.092c0 .312 0 .623.156.935-.78-.312-1.247-1.09-1.247-2.027v-5.456h1.09V10.99H.002v1.092h1.09v5.456c0 1.871 1.404 3.274 3.275 3.274h6.548l.624 2.183h.468v3.742c-4.678.156-8.732 1.247-8.732 3.898h1.092c0-1.715 3.43-2.65 7.64-2.807v2.651h1.09v-2.65c4.054 0 7.64.934 7.64 2.65h1.092c0-2.65-4.054-3.742-8.732-3.742v-3.742h.468l.468-2.183h6.548c1.87 0 3.274-1.403 3.274-3.274v-5.456h1.092V10.99h-3.118z" fill="#323232" mask="url(#b)"/></g></g></svg>                          
                        </div>
                        <p>Oficina <br> Exclusiva</p>
                      </div>
                    </li>
                    <li data-plan="Sala de Reuniones" onclick="seleccionarPlan(this)">
                      <div class="div-b text-center">
                        <div class="alto_img">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 26.31 22.86" style="enable-background:new 0 0 26.31 22.86;" xml:space="preserve">
<g>
  <path d="M13.07,7.81c-1.36,0-2.46-1.1-2.46-2.46s1.1-2.46,2.46-2.46c0.62,0,1.21,0.23,1.66,0.65c0.51,0.47,0.8,1.13,0.8,1.81   C15.53,6.7,14.43,7.81,13.07,7.81z M13.07,4.09c-0.69,0-1.25,0.56-1.25,1.25s0.56,1.25,1.25,1.25c0.69,0,1.25-0.56,1.25-1.25   c0-0.36-0.14-0.68-0.41-0.92C13.69,4.21,13.39,4.09,13.07,4.09z"/>
    <path d="M26.31,22.86H0L2.58,5.27h4.04c0.33,0,0.6,0.27,0.6,0.6s-0.27,0.6-0.6,0.6h-3L1.4,21.65h23.52l-2.1-15.17h-2.91   c-0.33,0-0.6-0.27-0.6-0.6s0.27-0.6,0.6-0.6h3.96L26.31,22.86z"/>
    <path d="M13.19,16.11l-0.47-0.6c-0.19-0.24-4.58-5.86-4.58-9.55c0-2.18,0.6-3.8,1.79-4.82c1.15-0.99,2.57-1.13,3.27-1.13   c0.76,0.01,2.12,0.14,3.27,1.13c1.19,1.02,1.79,2.65,1.79,4.82c0,3.69-4.4,9.31-4.58,9.55L13.19,16.11z M12.72,1.23   c-0.58,0.06-1.36,0.25-2.01,0.82c-0.9,0.79-1.36,2.1-1.36,3.9c0,2.61,2.73,6.63,3.85,8.17c1.12-1.54,3.85-5.56,3.85-8.17   c0-1.8-0.46-3.12-1.36-3.9c-0.65-0.57-1.43-0.76-2.01-0.82c-0.04,0-0.08,0-0.13-0.01c0,0-0.13-0.02-0.34-0.02   c-0.22,0-0.36,0.02-0.37,0.02C12.8,1.23,12.76,1.24,12.72,1.23z"/>
    <path d="M22.14,18.46h-2.43c-0.33,0-0.6-0.27-0.6-0.6s0.27-0.6,0.6-0.6h2.43c0.33,0,0.6,0.27,0.6,0.6S22.47,18.46,22.14,18.46z    M17.29,18.46h-2.43c-0.33,0-0.6-0.27-0.6-0.6s0.27-0.6,0.6-0.6h2.43c0.33,0,0.6,0.27,0.6,0.6S17.62,18.46,17.29,18.46z    M12.43,18.46h-2.43c-0.33,0-0.6-0.27-0.6-0.6s0.27-0.6,0.6-0.6h2.43c0.33,0,0.6,0.27,0.6,0.6S12.77,18.46,12.43,18.46z    M7.58,18.46H5.16c-0.33,0-0.6-0.27-0.6-0.6s0.27-0.6,0.6-0.6h2.43c0.33,0,0.6,0.27,0.6,0.6S7.92,18.46,7.58,18.46z"/>
</g>
</svg>                          
                        </div>
                        <p>Sala de Reuniones</p>
                      </div>
                    </li>
                    <li data-plan="Auditorium 30" onclick="seleccionarPlan(this)">
                      <div class="div-b text-center">
                        <div class="alto_img">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="34" viewBox="0 0 31 34"><defs><path id="a" d="M0 .013h30.87V34H0z"/></defs><g fill="none" fill-rule="evenodd"><g transform="translate(0 -.012)"><mask id="b" fill="#fff"><use xlink:href="#a"/></mask><path d="M15.434.948c-.623 0-1.247.155-1.715.468L2.962 7.651c-.935.623-1.716 1.87-1.716 3.118v12.317c0 1.09.781 2.494 1.716 3.117l10.757 6.237c.468.311 1.092.467 1.715.467.624 0 1.248-.156 1.716-.467l10.757-6.237c.935-.623 1.715-1.87 1.715-3.117V10.77c0-1.091-.78-2.495-1.715-3.118L17.15 1.415c-.313-.312-.936-.468-1.716-.468m0 33.054c-.935 0-1.715-.157-2.338-.624L2.338 27.139C1.091 26.518 0 24.646 0 23.244V10.926c0-1.56 1.092-3.275 2.34-4.054L13.095.634c.623-.311 1.56-.623 2.338-.623.78 0 1.716.157 2.34.623L28.53 6.873c1.403.78 2.34 2.495 2.34 4.055v12.316c0 1.559-1.093 3.274-2.34 4.054l-10.758 6.235c-.468.312-1.403.469-2.339.469" fill="#323232" mask="url(#b)"/></g><path d="M15.434 5.3c-2.026 0-3.74 1.716-3.74 3.743 0 2.182 1.87 5.768 3.74 5.768 1.871 0 3.742-3.586 3.742-5.768.156-2.183-1.558-3.742-3.742-3.742m0 10.757c-2.962 0-4.988-4.521-4.988-7.015 0-2.651 2.182-4.99 4.988-4.99 2.807 0 4.99 2.184 4.99 4.99 0 2.494-2.027 7.015-4.99 7.015m8.887 10.29c-.312 0-.623-.312-.623-.624 0-4.209-3.742-7.639-8.264-7.639-4.52 0-8.262 3.43-8.262 7.64 0 .311-.312.623-.624.623s-.623-.312-.623-.624c0-4.833 4.208-8.73 9.509-8.73 5.302 0 9.511 3.897 9.511 8.73 0 .312-.156.624-.624.624" fill="#323232"/></g></svg>                            
                        </div>
                        <p>Auditorium <br> 30</p>
                      </div>
                    </li>                                                                                        
                    </ul>
                  </div>
                  <div class="section_datos col-lg-8 py-3 px-lg-2">
                    <div class="row">
                      <input type="hidden" id="planSeleccionado" name="planSeleccionado" value="">
                      <div class="col-md-6 mb-2">
                        <label for="" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="" name="nombre_cliente" required>
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="" name="apellido_cliente" required>
                      </div>
                      <div class="col-6 mb-2">
                        <label for="" class="form-label">Correo Electrónico</label>
                        <input type="text" class="form-control" id="" placeholder="" name="correo_cliente" required>
                      </div>
                      <div class="col-6 mb-2">
                        <label for="" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="" placeholder="" name="telefono_cliente" required>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="inputState" class="form-label">Sede</label>
                        <select id="inputState" class="form-select" name="sede_cliente" required>
                          <option selected>Selecciona el lugar</option>
                          <option>Calle Empancipación 380, San Isidro</option>
                          <option>Calle la Habana 595 int 2A, San Isidro</option>
                        </select>
                      </div>
                      <div class="col-6 mb-2">
                        <label for="" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="" placeholder="" name="empresa_cliente" required>
                      </div>
                      <div class="col-6 mb-2">
                        <label for="" class="form-label">Cantidad de personas</label>
                        <input type="text" class="form-control" id="" placeholder="" name="cantidad_personas" required>
                      </div>                        
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Información Adicional</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" required name="info_adicional" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="col-12 mt-3 text-center">
                      <button type="submit">
                          <span class="circle1"></span>
                          <span class="circle2"></span>
                          <span class="circle3"></span>
                          <span class="circle4"></span>
                          <span class="circle5"></span>
                          <span class="text">Enviar</span>
                      </button>                                                
                      </div>
                    </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </section>      
    </main>

    <!-- /.container-fluid -->
    <div id="spinner" class="loading-overlay">
      <div class="spinner-grow naranja" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow naranja ms-3" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow naranja ms-3" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow naranja ms-3" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

<footer class="footer_home py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        
      </div>
      <div class="col-12">
       <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 text-center"><p>© 2023 Conexa. All Rights Reserved.</p></div>         
       </div>
      </div>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Tu HTML -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    var spinner = $("#spinner");
    spinner.hide();

    $("#miFormulario").submit(function(e) {
      e.preventDefault();
      
      spinner.show();

      // Obtener datos del formulario
      var formData = $(this).serialize();

      // Realizar la petición AJAX
      $.ajax({
        type: "POST",
        url: "add/formClientes.php", // Reemplaza esto con la ruta correcta a tu script PHP
        data: formData,
        success: function(response) {
          spinner.hide();
          // Manejar la respuesta del servidor (puede ser útil para mostrar mensajes de éxito, errores, etc.)
          console.log(response);

          // Ejemplo de redirección a otra página después de un segundo
          setTimeout(function() {
            window.location.href = "index.php";
          }, 1000);          
        },
        error: function(error) {
          spinner.hide();
          // Manejar errores de la petición AJAX
          console.log(error);
        }
      });
    });
  });
</script>

<script>
  function seleccionarPlan(elemento) {
    var planSeleccionado = elemento.getAttribute("data-plan");
    document.getElementById("planSeleccionado").value = planSeleccionado;

    var elementos = document.getElementById("planesList").getElementsByTagName("li");
    for (var i = 0; i < elementos.length; i++) {
      elementos[i].classList.remove("active");
    }
    elemento.classList.add("active");
  }

  document.addEventListener("DOMContentLoaded", function() {
    // Código adicional relacionado con el DOMContentLoaded si es necesario.
  });
</script>

</body>
</html>

