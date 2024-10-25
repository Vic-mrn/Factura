<?php include('includes/header.php'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <br />
        <h3>Registro de alumno</h3>
        <form class="row g-3" method="POST">
          <!-- Nombre -->
          <div class="col-4">
            <label class="form-label">Nombre(s)</label>
            <input type="text" class="form-control" name="nombre"/>
          </div>

          <div class="col-4">
            <label class="form-label">Apellido paterno</label>
            <input type="text" class="form-control" name="apellidoP"/>
          </div>

          <div class="col-4">
            <label class="form-label">Apellido materno</label>
            <input type="text" class="form-control" name="apellidoM"/>
          </div>

          <!--  -->
          <div class="col-1">
            <label for="inputAddress" class="form-label">Edad</label>
            <input type="text" class="form-control" name="edad"/>
          </div>
          <div class="col-5">
            <label class="form-label">CURP</label>
            <input type="text" class="form-control" name="curp"/>
          </div>

          <!--  -->
          <div class="col-md-3">
            <label class="form-label">Nivel educativo</label>
            <select class="form-select" name="nivel">
              <option selected>Elige alguna opcion</option>
              <option>Preescolar</option>
              <option>Primaria</option>
              <option>Secundaria</option>
            </select>
          </div>

          <div class="col-md-3">
            <label class="form-label">Grado</label>
            <select class="form-select" name="grado">
              <option selected>Elige alguna opcion</option>
              <option>1ro</option>
              <option>2do</option>
              <option>3ro</option>
              <option>4to</option>
              <option>5to</option>
              <option>6to</option>
            </select>
          </div>

          <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Registrar alumno" name="btnRegistrarAlumno"/>
          </div>

          <?php

          if (!empty($_POST["btnRegistrarAlumno"])) {
              if (empty($_POST["nombre"]) or empty($_POST["apellidoP"]) or empty($_POST["apellidoM"]) or empty($_POST["edad"] or empty($_POST["curp"]))) {
                  echo '<div class="alert alert-danger">Los campos estan vacios, intenta de nuevo</div>';
              } 
              else if ($_POST["nivel"] == "Elige alguna opcion" or $_POST["grado"] == "Elige alguna opcion"){
                echo '<div class="alert alert-danger">Seleccione una opcion valida</div>';
              } else {
                  $usuario=$_POST["usuario"];
                  $apellidoP=$_POST["apellidoP"];
                  $apellidoM=$_POST["apellidoM"];
                  $edad=$_POST["edad"];
                  $curp=$_POST["curp"];
                  $nivel=$_POST["nivel"];
                  $grado=$_POST["grado"];

                  $insert_alumno = $conn->query("INSERT INTO alumnos (Nombre, apellidoP, apellidoM, Edad, CURP, NivelEducativo, Grado, Matricula) 
                  VALUES ($usuario, $apellidoP, $apellidoM, $edad, $curp, $nivel, $grado)");

                  echo '<div class="alert alert-danger">Registrado correctamente</div>';

                  } else {
                      echo '<div class="alert alert-danger">Registro erroneo, intenta de nuevo</div>';
                  }
                  
              }
          }

          ?>
        </form>
      </div>
    </div>
  </div>
</div>


