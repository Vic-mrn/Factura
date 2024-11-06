<?php
// Asegúrate de que $conn esté definido y conectado a la base de datos
if (!empty($_POST["btnRegistrarPadre"])) {
    if (empty($_POST["nombre"]) || empty($_POST["apellidoP"]) || empty($_POST["apellidoM"]) || empty($_POST["edad"]) || empty($_POST["rfc"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos, intenta de nuevo</div>';
    } else if (empty($_POST["regimen"]) || $_POST["regimen"] == "Elige alguna opcion") {
        echo '<div class="alert alert-danger">Seleccione una opción válida</div>';
    } else {
        $nombre = $_POST["nombre"];
        $apellidoP = $_POST["apellidoP"];
        $apellidoM = $_POST["apellidoM"];
        $direccion = $_POST["direccion"];
        $cp = $_POST["cp"];
        $edad = $_POST["edad"];
        $rfc = $_POST["rfc"];
        $reg = $_POST["regimen"];

        // Preparar y ejecutar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO padres (Nombre, ApellidoP, ApellidoM, Direccion, CP, Edad, RFC, RegimenFiscal) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssisss", $nombre, $apellidoP, $apellidoM, $direccion, $cp, $edad, $rfc, $reg);

        if ($stmt->execute()) {
            echo '<div class="alert alert-success">Registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error en el registro</div>';
        }
        
        $stmt->close();
    }
}
?>
