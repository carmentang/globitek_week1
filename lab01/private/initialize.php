<?php

  define("DB_SERVER", "localhost");
  define("DB_USER", "user");
  define("DB_PASS", "bijou500");
  define("DB_NAME", "globitek");

  require_once('functions.php');
  $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
?>
