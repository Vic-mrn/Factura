<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'con.1234',
    'facturas'
) or die(mysqli_erro($mysqli));

if (isset($_POST['btnRegistrarPadre'])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $apellidoM = $_POST['direccion'];
    $apellidoM = $_POST['cp'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $curp = $_POST['rfc'];
    $nivel = $_POST['regimen'];

    // Validar que el año sea 1970 o posterior
    if ($anio < 1970) {
        $_SESSION['Mensaje'] = 'El año debe ser 1970 o posterior.';
        $_SESSION['message_type'] = 'success';
        header('Location: MenuPP.php');
    }

    // Validar la fecha
    if (!checkdate($mes, $dia, $anio)) {
        echo '<div class="alert alert-success">La fecha de nacimiento no es válida.</div>';
        exit();
    }

    // Guardar en la base de datos
    $usuario = $_POST["nombre"];
    $apellidoP = $_POST["apellidoP"];
    $apellidoM = $_POST["apellidoM"];
    $direccion = $_POST["direccion"];
    $cp = $_POST["cp"];
    $fechaNacimiento = "$anio-$mes-$dia"; // Formato YYYY-MM-DD
    $rfc = $_POST["rfc"];
    $regimen = $_POST["regimen"];

    $insert_padre = $conn->query("INSERT INTO padres (Nombre, apellidoP, apellidoM, Direccion, CP, FechaN, RFC, RegimenFiscal) 
        VALUES ('$usuario', '$apellidoP', '$apellidoM', '$direccion', '$cp', '$fechaNacimiento','$rfc', '$regimen')");


    echo '<div class="alert alert-success">Registrado correctamente</div>';
}

if (isset($_POST['btnModificarPadre'])) {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $fechaN = $_POST['fechaN'];
    $curp = $_POST['curp'];
    $nivelEducativo = $_POST['nivel'];
    $grado = $_POST['grado'];

    $query = "UPDATE alumnos SET 
                    Nombre = '$nombre',
                    ApellidoP = '$apellidoP',
                    ApellidoM = '$apellidoM',
                    FechaN = '$fechaN',
                    CURP = '$curp',
                    NivelEducativo = '$nivelEducativo',
                    Grado = '$grado'
                  WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        echo '<div class="alert alert-success">Modificado correctamente</div>';
    }
}


if (isset($_POST['btnEliminarPadre'])) {
    $id = $_POST['id'];
    $delete_padre = $conn->query("DELETE FROM padres WHERE id = '$id'");

    echo '<div class="alert alert-success">Eliminado correctamente</div>';
}

?>