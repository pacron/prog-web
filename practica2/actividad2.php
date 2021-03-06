<!doctype HTML>
<html>
  <head>
    <?php include("php-includes/generic-head.inc.php"); ?>
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/actividad.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/actividad.css">
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <section class="activity-info-container">
        <h2 class="ribbon">KÁRATE</h2>
        <section class="activity-info">
          <img src="static/imgs/activities/karate.jpg">
          <section class="activity-description">
            <h2>DESCRIPCIÓN DE LA ACTIVIDAD</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fermentum sapien mi. Etiam eget lectus dignissim, finibus mauris vitae, vestibulum velit. Praesent pharetra pretium tortor eu ornare. Ut et justo varius, sodales ante non, pulvinar nulla. Nunc facilisis ornare arcu ut cursus. Vivamus mattis in arcu a porta. Cras eget efficitur mi, ut dignissim enim. Donec in rutrum est. Suspendisse eu orci lacinia, laoreet lectus nec, tempor dolor. Aliquam faucibus mollis augue, eu vehicula leo mattis sit amet. Sed nisi elit, porta vel odio non, finibus aliquet libero. Morbi non nibh faucibus, tempus est sed, mattis mi. Sed pharetra nisi vitae pulvinar venenatis. Ut pulvinar ante elementum, feugiat elit ut, ultrices purus. Pellentesque auctor vel ipsum nec semper. Quisque tincidunt quam et vehicula iaculis.</p>
            <p>Suspendisse mattis leo ut nulla tincidunt, ac congue massa rutrum. Sed faucibus turpis odio, vitae rhoncus nulla egestas sit amet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris ac tincidunt lorem. In consectetur ac ante quis convallis. Quisque viverra gravida turpis vitae pretium. Cras mollis arcu vitae mauris posuere, vitae feugiat neque ultricies. Donec faucibus pulvinar nulla a pellentesque. Suspendisse potenti. Praesent blandit porta rhoncus.</p>
            <p>Morbi molestie sagittis nunc, bibendum malesuada neque luctus id. Suspendisse elementum dolor sed egestas imperdiet. Cras et velit ut metus imperdiet dignissim. Donec venenatis efficitur commodo. In pellentesque turpis metus, sit amet pulvinar nulla rhoncus et. Sed aliquam fringilla risus, vitae laoreet felis tincidunt a. Mauris arcu diam, ullamcorper sit amet vehicula id, bibendum a arcu. In at hendrerit nisi, sit amet pharetra urna. Vestibulum vitae mattis quam. Nunc aliquet rutrum enim, ac auctor neque. Cras bibendum aliquet fringilla. In hac habitasse platea dictumst. Suspendisse potenti. Vivamus finibus consectetur justo ut interdum. In blandit eros nec neque aliquam, eu ullamcorper nibh fermentum.</p>
            <h2>HORARIO</h2>
            <ul>
              <li>Martes: 11:00 a 12:00</li>
              <br>
              <li>Jueves: 12:00 a 13:00</li>
              <br>
            </ul>
          </section>
        </section>
      </section>
      <aside class="content-list-container" id="activities-list">
        <h2 class="ribbon">ACTIVIDADES</h2>
        <section class="content-list" id="activities">
          <section class="activity-container">
            <img src="static/imgs/activities/yoga.jpg">
            <section class="text">
              <h1>Clases de Yoga</h1>
              <a href="actividad1.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/karate.jpg">
            <section class="text">
              <h1>Kárate</h1>
              <a href="actividad2.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/dance.jpg">
            <section class="text">
              <h1>Sesiones de baile</h1>
              <a href="actividad3.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/running.jpg">
            <section class="text">
              <h1>Iniciación al atletismo</h1>
              <a href="actividad4.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/tennis.jpg">
            <section class="text">
              <h1>Clases de tenis</h1>
              <a href="actividad5.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/football.jpg">
            <section class="text">
              <h1>Equipo de fútbol</h1>
              <a href="actividad6.php">Más información</a>
            </section>
          </section>
        </section>
      </aside>
    </section>
    <footer class="bottom-footer">
      <section id="contact">
        <img class="glyphicon-phone" src="static/icons/phone.svg">
        <p id="phone">(+34) 958 123 456</p>
        <img class="glyphicon-mail" src="static/icons/envelope.svg">
        <a href="mailto:contacto@awesomegym.es"><p id="mail">contacto@awesomegym.es</p></a>
        <a id="howto" href="como_se_hizo.pdf">Como se hizo</a>
      </section>
    </footer>
  </body>
</html>
