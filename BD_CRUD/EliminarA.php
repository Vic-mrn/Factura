<?php
include("../DB/db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM alumnos WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
  
    $_SESSION['message'] = 'Alumno eliminado correctamente';
    $_SESSION['message_type'] = 'danger';
    header('Location: ../MenuP.php#delete');
    exit;
  }

?>