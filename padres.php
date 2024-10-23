<?php include('includes/header.php'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <br />
        <h3>Registro de alumno</h3>
        <form class="row g-3">
          <!-- Nombre -->
          <div class="col-4">
            <label class="form-label">Nombre(s)</label>
            <input type="text" class="form-control" />
          </div>

          <div class="col-4">
            <label class="form-label">Apellido paterno</label>
            <input type="text" class="form-control" />
          </div>

          <div class="col-4">
            <label class="form-label">Apellido materno</label>
            <input type="text" class="form-control" />
          </div>

          <!--  -->
          <div class="col-md-6">
            <label class="form-label">Contraseña</label>
            <input class="form-control" placeholder="Contraseña" />
          </div>

          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Repetir contraseña</label>
            <input class="form-control" placeholder="Repetir contraseña" />
          </div>

           <!--  -->

          <div class="col-2">
            <label for="inputAddress" class="form-label">Edad</label>
            <input type="text" class="form-control" />
          </div>
          <div class="col-10">
            <label class="form-label">CURP</label>
            <input type="text" class="form-control" />
          </div>

          <!--  -->
          <div class="col-md-4">
            <label class="form-label">Regimen fiscal</label>
            <select class="form-select">
              <option selected>Elige alguna opcion</option>
              <option>Sueldos</option>
              <option>Simplificado</option>
              <option>Persona fisica</option>
            </select>
          </div>

          <div class="col-md-4">
            <label class="form-label">Nivel educativo</label>
            <select class="form-select">
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
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>