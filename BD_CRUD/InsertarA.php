<?php
if (!empty($_POST["btnRegistrarAlumno"])) {
    if (empty($_POST["nombre"]) or empty($_POST["apellidoP"]) or empty($_POST["apellidoM"]) or empty($_POST["edad"]) or empty($_POST["curp"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos, intenta de nuevo</div>';
    } else if ($_POST["nivel"] == "Elige alguna opcion" or $_POST["grado"] == "Elige alguna opcion") {
        echo '<div class="alert alert-danger">Seleccione una opción válida</div>';
    } else {
        $usuario = $_POST["nombre"];
        $apellidoP = $_POST["apellidoP"];
        $apellidoM = $_POST["apellidoM"];
        $edad = $_POST["edad"];
        $curp = $_POST["curp"];
        $nivel = $_POST["nivel"];
        $grado = $_POST["grado"];

        $insert_alumno = $conn->query("INSERT INTO alumnos (Nombre, apellidoP, apellidoM, Edad, CURP, NivelEducativo, Grado) 
        VALUES ('$usuario', '$apellidoP', '$apellidoM', '$edad', '$curp', '$nivel', '$grado')");

        echo '<div class="alert alert-success">Registrado correctamente</div>';
    }
}

?>