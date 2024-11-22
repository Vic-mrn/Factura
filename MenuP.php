<?php include('includes/header.php');
include("procesos/conexion.php");
?>

<div class="py-5">
    <div class="container rounded-shadow">

        <div class="container mt-4">
            <!-- Pestañas -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="insert-tab" data-toggle="tab" href="#insert" role="tab"
                        aria-controls="insert" aria-selected="true">Insertar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="consult-tab" data-toggle="tab" href="#consult" role="tab"
                        aria-controls="consult" aria-selected="false">Consultar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="modify-tab" data-toggle="tab" href="#modify" role="tab"
                        aria-controls="modify" aria-selected="false">Modificar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="delete-tab" data-toggle="tab" href="#delete" role="tab"
                        aria-controls="delete" aria-selected="false">Eliminar</a>
                </li>
            </ul>

            <!-- Contenido de las pestañas -->
            <div class="tab-content" id="myTabContent">
                <!-- Insertar -->
                <div class="tab-pane fade show active" id="insert" role="tabpanel" aria-labelledby="insert-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <br />
                                    <h3>Registro de padres</h3>
                                    <form class="row g-3" method="POST">
                                        <!-- Nombre -->
                                        <div class="col-4">
                                            <label class="form-label">Nombre(s)</label>
                                            <input type="text" class="form-control" name="nombre" />
                                        </div>

                                        <div class="col-4">
                                            <label class="form-label">Apellido paterno</label>
                                            <input type="text" class="form-control" name="apellidoP" />
                                        </div>

                                        <div class="col-4">
                                            <label class="form-label">Apellido materno</label>
                                            <input type="text" class="form-control" name="apellidoM" />
                                        </div>

                                        <!--  -->
                                        <div class="col-md-6">
                                            <label class="form-label">Direccion</label>
                                            <input class="form-control" placeholder="Ingresa tu direccion"
                                                name="direccion" />
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Codigo postal</label>
                                            <input class="form-control" placeholder="Ingresa tu codigo postal"
                                                name="cp" />
                                        </div>

                                        <!-- Fecha de nacimiento -->
                                        <div class="col-1">
                                            <label for="inputAddress" class="form-label">Dia</label>
                                            <input type="text" class="form-control" name="dia" placeholder="00"/>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Mes de nacimiento</label>
                                            <select class="form-select" name="mes">
                                                <option selected>Mes</option>
                                                <option value="1">Enero</option>
                                                <option value="2">Febrero</option>
                                                <option value="3">Marzo</option>
                                                <option value="4">Abril</option>
                                                <option value="5">Mayo</option>
                                                <option value="6">Junio</option>
                                                <option value="7">Julio</option>
                                                <option value="8">Agosto</option>
                                                <option value="9">Septiembre</option>
                                                <option value="10">Octubre</option>
                                                <option value="11">Noviembre</option>
                                                <option value="12">Diciembre</option>
                                            </select>
                                        </div>

                                        <div class="col-1">
                                            <label for="inputAddress" class="form-label">Año</label>
                                            <input type="text" class="form-control" name="anio" placeholder="2XXX"/>
                                        </div>

                                        <div class="col-4">
                                            <label class="form-label">RFC</label>
                                            <input type="text" class="form-control" name="rfc" />
                                        </div>

                                        <!--  -->
                                        <div class="col-md-4">
                                            <label class="form-label">Regimen fiscal</label>
                                            <select class="form-select" name="regimen">
                                                <option selected>Elige alguna opcion</option>
                                                <option>Sueldos y Salarios e Ingresos Asimilados a Salarios</option>
                                                <option>Simplificado de Confianza</option>
                                                <option>Persona Física con Actividad Empresarial</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary" value="Registrar padre"
                                                name="btnRegistrarPadre" />
                                        </div>
                                        <?php include('BD_CRUD/InsertarP.php'); ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- consultar -->
                <div class="tab-pane fade" id="consult" role="tabpanel" aria-labelledby="consult-tab">
                    <br>

                    <h3>Consultar padres</h3>
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Direccion</th>
                                    <th>CP</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>RFC</th>
                                    <th>Regimen fiscal</th>
                                    <!-- <th>Matricula</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM padres";
                                $result_tasks = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['Nombre']; ?></td>
                                    <td><?php echo $row['ApellidoP']; ?></td>
                                    <td><?php echo $row['ApellidoM']; ?></td>
                                    <td><?php echo $row['Direccion']; ?></td>
                                    <td><?php echo $row['CP']; ?></td>
                                    <td><?php echo $row['Edad']; ?></td>
                                    <td><?php echo $row['RFC']; ?></td>
                                    <td><?php echo $row['RegimenFiscal']; ?></td>
                                    <!-- <td><?php echo $row['Matricula']; ?></td> -->
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modificar -->
                <div class="tab-pane fade" id="modify" role="tabpanel" aria-labelledby="modify-tab">
                    <br>
                    <h3>Modificar Informacion de padres</h3>
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Direccion</th>
                                    <th>CP</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>RFC</th>
                                    <th>Regimen fiscal</th>
                                    <!-- <th>Matricula</th> -->
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM padres";
                                $result_tasks = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['Nombre']; ?></td>
                                    <td><?php echo $row['ApellidoP']; ?></td>
                                    <td><?php echo $row['ApellidoM']; ?></td>
                                    <td><?php echo $row['Direccion']; ?></td>
                                    <td><?php echo $row['CP']; ?></td>
                                    <td><?php echo $row['Edad']; ?></td>
                                    <td><?php echo $row['RFC']; ?></td>
                                    <td><?php echo $row['RegimenFiscal']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                            Modificar
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                    <br>
                    <h3>Dar de baja padres</h3>
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Direccion</th>
                                    <th>CP</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>RFC</th>
                                    <th>Regimen fiscal</th>
                                    <!-- <th>Matricula</th> -->
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM padres";
                                $result_tasks = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                <tr>
                                <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['Nombre']; ?></td>
                                    <td><?php echo $row['ApellidoP']; ?></td>
                                    <td><?php echo $row['ApellidoM']; ?></td>
                                    <td><?php echo $row['Direccion']; ?></td>
                                    <td><?php echo $row['CP']; ?></td>
                                    <td><?php echo $row['Edad']; ?></td>
                                    <td><?php echo $row['RFC']; ?></td>
                                    <td><?php echo $row['RegimenFiscal']; ?></td>
                                    <td>
                                        <a href="BD_CRUD/EliminarA.php?id=<?php echo $row['id'] ?>"
                                            class="btn btn-danger">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php if (isset($_SESSION['message'])) { ?>
                        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show"
                            role="alert">
                            <?= $_SESSION['message']?>

                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php session_unset(); } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>

<?php include('includes/footer.php'); ?>



<!-- <div class="row hidden-md-up">
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</div> -->