<!doctype HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Francisco Luque">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/topbar.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/topbar.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/top-menu.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/top-menu.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/footer.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/footer.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/responderhilo.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/responderhilo.css">
    <title>Awesome gym</title>
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <h2 class="ribbon">RESPONDER HILO</h2>
      <section class="response-form">
        <form action="php-includes/response-thread.php" method="post">
          <header>
            <h1>RESPUESTA</h1>
          </header>
          <fieldset>
            <textarea class="long-form-input" cols="80" rows="5" id="response"
            name="response" placeholder="Introducir respuesta"></textarea>
          </fieldset>
          <input type="submit" class="button" id="response-button" value="Enviar">
        </form>
      </section>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("");
?>
    </footer>
  </body>
</html>
