<?php
include('functions.php');

$sqlPull= "SELECT cust_id, name, surname, address, cities.postal, cities.city FROM customers INNER JOIN cities ON cities.postal = customers.postal"
