<?php

include('functions.php');

connect();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="insert.php" method="POST">
      First name<br><input type="text" id="fname" name="fname"><br>
      Surname<br><input type="text" id="sname" name="sname"><br>
      Address<br><input type="text" id="address" name="address"><br>
      Postal<br><input type="text" id="postal" name="postal"><br>
      <input type="submit" name="submit" value="Create">
    </form>


  </body>
</html>
