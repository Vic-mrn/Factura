<?php include('includes/header.php'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <br />
        <h3>Inicio de sesión</h3>
        <label class="form-label"> Correo electronico </label>
        <input
          type="text"
          class="form-control"
          placeholder="Correo electronico"
        />
      </div>
      <div class="mb-3">
        <label class="form-label"> Contraseña </label>
        <input
          type="text"
          class="form-control"
          id="formGroupExampleInput2"
          placeholder="Contraseña"
        />
      </div>
    </div>

    <div class="col">
      <div class="mb-3">
        <br />
        <h3>¿No tienes cuenta?, Registrate</h3>
        <form class="row g-3">
          <div class="col-12">
            <label for="inputEmail4" class="form-label"
              >Correo electronico</label
            >
            <input
              type="email"
              class="form-control"
              id="inputEmail4"
              placeholder="Correo electronico"
            />
          </div>

          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Contraseña</label>
            <input
              type="password"
              class="form-control"
              id="inputPassword4"
              placeholder="Contraseña"
            />
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label"
              >Repetir contraseña</label
            >
            <input
              type="password"
              class="form-control"
              id="inputPassword4"
              placeholder="Repetir contraseña"
            />
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">CURP</label>
            <input
              type="text"
              class="form-control"
              id="inputAddress"
              placeholder="Ingresa tu CURP - 18 digitos"
            />
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Dirección 2</label>
            <input
              type="text"
              class="form-control"
              id="inputAddress2"
              placeholder="Apartment, studio, or floor"
            />
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="inputCity" />
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" class="form-select">
              <option selected>Elige...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputZip" class="form-label">Código postal</label>
            <input type="text" class="form-control" id="inputZip" />
          </div>
          
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
