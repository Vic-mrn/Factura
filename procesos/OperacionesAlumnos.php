<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'con.1234',
    'facturas'
  ) or die(mysqli_erro($mysqli));

if (!empty($_POST["btnRegistrarAlumno"])) {
    if (empty($_POST["nombre"]) or empty($_POST["apellidoP"]) or empty($_POST["apellidoM"]) or empty($_POST["curp"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos, intenta de nuevo</div>';
    } else if ($_POST["nivel"] == "Elige alguna opcion" or $_POST["grado"] == "Elige alguna opcion") {
        echo '<div class="alert alert-danger">Seleccione una opción válida</div>';
    } else {
        $usuario = $_POST["nombre"];
        $apellidoP = $_POST["apellidoP"];
        $apellidoM = $_POST["apellidoM"];
        $curp = $_POST["curp"];
        $nivel = $_POST["nivel"];
        $grado = $_POST["grado"];

        $insert_alumno = $conn->query("INSERT INTO alumnos (Nombre, apellidoP, apellidoM, CURP, NivelEducativo, Grado) 
        VALUES ('$usuario', '$apellidoP', '$apellidoM', '$curp', '$nivel', '$grado')");

        echo '<div class="alert alert-success">Registrado correctamente</div>';
    }
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_alumno = $conn->query("DELETE FROM alumnos WHERE id = $id");
    // $result = mysqli_query($conn, $query);
    // if(!$result) {
    //   die("Query Failed.");
    // }
  
    // $_SESSION['message'] = 'Task Removed Successfully';
    // $_SESSION['message_type'] = 'danger';
    header('Location: ../MenuA.php');
  }

?>


