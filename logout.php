<?php
  session_start();
  session_destroy();
  header("Location: http://localhost/php/29-9-17/index.php");
  die();
 ?>
