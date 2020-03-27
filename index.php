<!DOCTYPE html>
<html lang="es">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php //include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <div class="container marketing">

      <br />
      <h1>Bienvenido al apartado del Departamento de Atención y Promoción a la Salud</h1>

      <div class="text-center">
        <img src="./mc/consulta.jpg" class="img-fluid" width="500px">
      </div>


      <br />
      <br />
      <br />
      <p class="bg-primary">.</p>
      <h2>Servicios</h2>
      <ol>
        <li>
          <p>Atención a la Salud</p>
          <ul>
            <li>La atención se brinda de manera gratuita con enfoque preventivo y en caso necesario valoración inicial ante alguna urgencia.</li>
          </ul>
        </li>

        <li>
          <p>Promoción a la Salud</p>
          <ul>
            <li>Educación para la salud</li>
            <li>Prevención de enfermedades transmisibles (Infecciones respiratorias, Enfermedades diarreicas, etcétera)</li>
            <li>Prevención de enfermedades no transmisibles </li>
          </ul>
        </li>
      </ol>

      <a id="objetivo"></a>
      <br />
      <br />
      <br />
      <p class="bg-success">.</p>
      <h2>Objetivo</h2>
      <p>Brindar atención en salud preventiva a la comunidad universitaria sin discriminación por motivos de raza, edad, pertenencia a grupo étnico u otra condición.</p>


      <a id="campanas"></a>
      <br />
      <br />
      <br />
      <p class="bg-info">.</p>
      <h2>Campañas de salud</h2>

      <div class="text-center">
        <img src="./mc/vacunacion.jpg" class="img-fluid" width="400px">
      </div>
      <p>Durante el año se realizan 3 ferias de la salud en donde se dispone de pláticas y talleres sobre el cuidado de la salud con enfoque a la comunidad universitaria.</p>
      <p>En estos periodos se cuenta además con dotación de preservativos, ácido fólico, desparasitante, vida suero oral y orientación en métodos de planificación familiar.</p>
      <p>Conforme a la temporada se cuenta con esquemas de vacunación específicos para la comunidad universitaria.</p>


      <a id="horario"></a>
      <br />
      <br />
      <br />
      <p class="bg-warning">.</p>
      <h2>Horario de atención</h2>
      <p>Lunes a viernes de 7:00 a 17:30 horas</p>




      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
