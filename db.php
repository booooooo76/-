<?php
  define('DB_HOST','localhost');
  define('DB_USER','root');
  define('DB_PASSWORD','17020575');
  define('DB_NAME','тур'); 

  $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if($mysql->connect_errno) exit('Error!');
  $mysql->set_charset('utf8');
  $mysql->close();
?>
