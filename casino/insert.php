<?php

include('functions.php');

$name = $_POST['fname'];
$surname = $_POST['sname'];
$address = $_POST['address'];
$postal = $_POST['postal'];

if(isset($_POST["submit"])){
  if($sqlInsert = mysqli_query($conn,"INSERT INTO customers (name, surname, address, postal) VALUES('".$name."', '".$surname."', '".$address."', '".$postal."')")){
    echo "Success";
  }else{
    echo "Fuck af" . mysqli_error($conn);
  }
}



?>
