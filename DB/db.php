<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  'con.1234',
  'facturas'
) or die(mysqli_erro($mysqli));

?>
