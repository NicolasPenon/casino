<?php

$conn = null;

function connect() {
  global $conn;

  $conn = mysqli_connect(DBHOST, DBUSER, DBPASS);

  if(!$conn) {
    die(mysqli_error($conn));
  }

  mysqli_select_db($conn, DBNAME);
}

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'root');
define('DBNAME', 'online-casino');

connect();
