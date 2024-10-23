<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>PHP CRUD MYSQL</title>
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <!-- BOOTSTRAP 5 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <!-- BOOTSTRAP 5 (OFFLINE)-->
    <link rel="stylesheet" href="./css/bootstrap.css">
	  <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/bootstrap.js"></script>
  </head>
  <body>

<div class="container p-4">
    <div class="row justify-content-around">
        <div class="col-7 p-4 rounded text-body-emphasis bg-body-secondary">
            <div class="display-6"> Inicio de sesion</div>
            <br><br>
            <div class="col-md-6 justify-content-around">
                <label class="form-label">Correo electronico</label>
                <input class="form-control" placeholder="" />
            </div>
            <div class="col-md-6 justify-content-around">
                <label for="inputPassword4" class="form-label">Contraseña</label>
                <input class="form-control" placeholder="" />
            </div>
            <a href="portal.php"><button type="submit" class="btn btn-primary col-12">Ingresar</button></a>
        </div>
    </div>
</div>