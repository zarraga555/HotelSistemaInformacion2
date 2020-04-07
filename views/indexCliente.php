<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hotel San Marino</title>
  <link rel="shortcut icon" href="img/faviconbol.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/e8a67cfe62.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/estilos2.css">
  <link rel="stylesheet" href="css/pequeno.css">
  <link rel="stylesheet" href="css/mediano.css">



</head>

<body>

  <header class="header">
    <div class="container">
      <div class="logo">

      </div>

      <nav>

        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="index.html#principales">Preguntas Frecuentes</a></li>
          <li><a href="html/contacto.html">Contactanos</a></li>
          <li><a href="" class="btn btn-primary">Iniciar Sesion</a></li>
        </ul>
      </nav>

    </div>
  </header>


  <!--IMAGEN DE LA NAVEGACION-->
  <div class="img-header" style="background-image: url(../img/Imagenhotel.png)">
    <div class=" container-header">
      <div class="degrade">
        <div class="bienvenido">
          <div class="container2">
            <form action="">
              <div class="form-group">
                <label for="EditarFechaVencimineto">Fecha de Entrada</label>
                <input type="date" class="form-control" id="EditarFechaVencimineto" name="EditarFechaVencimineto" required>
              </div>
              <div class="form-group">
                <label for="EditarFechaVencimineto">Fecha de Salida</label>
                <input type="date" class="form-control" id="EditarFechaVencimineto" name="EditarFechaVencimineto" required>
              </div>
              <div class="form-group">
                <label for="Editarcantidad">Cantidad de Adultos</label>
                <input type="number" class="form-control" name="Editarcantidad" id="Editarcantidad" required>
              </div>
              <div class="form-group">
                <label for="Editarcantidad">Cantidad de Niños</label>
                <input type="number" class="form-control" name="Editarcantidad" id="Editarcantidad" required>
              </div>
              <li><a href="" class="btn btn-primary">Buscar</a></li>
            </form>
          </div>
        </div>
        <div class="bienvenido">
          <h1>Hola, te damos la Bienvenida</h1>
        </div>
      </div>

    </div>
  </div>



  <!--PIE DE PAGINA-->
  <footer>
    <div class="container-footer-all">
      <div class="container-footer">
        <div class="logo-redes">
          <h2 class="h2-footer">Redes Sociales</h2>
          <i class="fab fa-facebook icon-social"></i>
          <i class="fab fa-twitter icon-social"></i>
          <i class="fab fa-instagram icon-social"></i>
          <i class="fab fa-youtube icon-social"></i>
          <div class="hora">
            <script src="js/hora.js"></script>
          </div>
        </div>
        <div class="soporte">
          <h2 class="h2-footer">Soporte</h2>
          <ul>
            <li class="list-footer"><a class="a-footer" href="html/contacto.html#preguntas">Preguntas Frecuentes</a></li>
            <li class="list-footer"><a class="a-footer" href="html/contacto.html">Contactanos</a></li>
            <li class="list-footer"><a class="a-footer" href="">Terminos y Condiciones</a></li>
          </ul>
        </div>


      </div>
      <div class="copy">
        <p>Copyright © 2020 | Hotel San Marino</p>
      </div>
    </div>

  </footer>
  <script src="js/main.js"></script>
</body>

</html>