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
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/foro.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/foro.css">
    <title>Awesome gym</title>
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <section class="ribbon-forum">
        <h2 class="ribbon">HILO</h2>
      </section>
      <section class="forum-threads-container">
<?php require("php-includes/forum-thread.inc.php");
     $thread = ForumThread::getThread($_GET["thread_id"]);
    echo '<article class="forum-thread">';
    echo '<img src="static/imgs/users/'.$thread->getValue("user_image").'">';
    echo '<section class="user-info">';
    echo "<h1>".$thread->getValue("full_user_name")."</h1>";
    echo '</section>';
    echo '<section class="thread-info">';
    echo '<h1>'.$thread->getValue("title")."</h1>";
    echo "<p>".$thread->getValue("description")."</p>";
    echo '</section>';
    echo '</article>';
?>
       <hr>
<?php require("php-includes/forum-response.inc.php");
$responses = ForumResponse::getResponses($_GET["thread_id"]);
foreach($responses as $response){
    echo '<article class="forum-thread">';
    echo '<img src="static/imgs/users/'.$response->getValue("user_image").'">';
    echo '<section class="user-info">';
    echo "<h1>".$response->getValue("full_user_name")."</h1>";
    echo '</section>';
    echo '<section class="thread-info">';
    echo "<p>".$response->getValue("response")."</p>";
    echo '</section>';
    echo '</article>';
    if ($response !== end($responses)){
        echo '<hr>';
    }
}
?>
      </section>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>