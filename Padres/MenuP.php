<?php include('includes/header.php'); ?>


<div class="py-5">
    <div class="container rounded-shadow">
        <?php include('procesos/OperacionesPadres.php'); ?>
        <div class="container mt-4">

            <!-- Mensajes -->
            <?php if (isset($_SESSION['Mensaje'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['Mensaje']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } ?>




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
                                    <h3>Registro de alumno</h3>
                                    <form class="row g-3" method="POST">
                                        <!-- Nombre -->
                                        <div class="col-4">
                                            <label class="form-label">Nombre(s)</label>
                                            <input type="text" class="form-control" name="nombre"
                                                placeholder="Juan Carlos" />
                                        </div>

                                        <div class="col-4">
                                            <label class="form-label">Apellido paterno</label>
                                            <input type="text" class="form-control" name="apellidoP"
                                                placeholder="Lopez" />
                                        </div>

                                        <div class="col-4">
                                            <label class="form-label">Apellido materno</label>
                                            <input type="text" class="form-control" name="apellidoM"
                                                placeholder="Perez" />
                                        </div>

                                        <!-- Direccion -->
                                        <div class="col-md-6">
                                            <label class="form-label">Direccion</label>
                                            <input type="text" class="form-control" placeholder="Ingresa tu direccion"
                                                name="direccion" />
                                        </div>

                                        <div class="col-md-2">
                                            <label for="inputPassword4" class="form-label">Codigo postal</label>
                                            <input type="text" class="form-control"
                                                placeholder="Ingresa tu codigo postal" name="cp" />
                                        </div>

                                        <!-- Fecha de nacimiento -->
                                        <div class="col-1">
                                            <label for="inputAddress" class="form-label">Dia</label>
                                            <input type="text" class="form-control" name="dia" placeholder="00"
                                                maxlength="2" pattern="\d{1,2}"
                                                title="Solo se permiten números (máx. 2 dígitos)" required />
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
                                            <input type="text" class="form-control" name="anio" placeholder="1970"
                                                maxlength="4" pattern="\d{4}"
                                                title="Solo se permiten números (exactamente 4 dígitos)" required />
                                        </div>

                                        <!-- RFC -->
                                        <div class="col-4">
                                            <label class="form-label">RFC</label>
                                            <input type="text" class="form-control" name="rfc" />
                                        </div>

                                        <!--  -->
                                        <div class="col-md-4">
                                            <label class="form-label">Regimen fiscal</label>
                                            <select class="form-select" name="regimen">
                                                <option selected>Elige alguna opcion</option>
                                                <option value="1">Sueldos y Salarios e Ingresos Asimilados a Salarios
                                                </option>
                                                <option value="2">Simplificado de Confianza</option>
                                                <option value="3">Persona Física con Actividad Empresarial</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary" value="Registrar padre"
                                                name="btnRegistrarPadre" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- consultar -->
                <div class="tab-pane fade" id="consult" role="tabpanel" aria-labelledby="consult-tab">
                    <br>

                    <h3>Consultar alumnos</h3>
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Direccion</th>
                                    <th>Codigo Postal</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>RFC</th>
                                    <th>Regimen Fiscal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM padres";
                                $result_tasks = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ApellidoP']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ApellidoM']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Direccion']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['CP']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['FechaN']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['RFC']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['RegimenFiscal']; ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modificar -->
                <div class="tab-pane fade" id="modify" role="tabpanel" aria-labelledby="modify-tab">
                    <br>
                    <h3>Modificar informacion de alumnos</h3>
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Direccion</th>
                                    <th>Codigo Postal</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>RFC</th>
                                    <th>Regimen Fiscal</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM alumnos";
                                $result_tasks = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ApellidoP']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ApellidoM']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Direccion']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['CP']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['FechaN']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['RFC']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['RegimenFiscal']; ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" onclick="showForm(
                                                '<?php echo $row['id']; ?>',
                                                '<?php echo $row['Nombre']; ?>',
                                                '<?php echo $row['ApellidoP']; ?>',
                                                '<?php echo $row['ApellidoM']; ?>',
                                                '<?php echo $row['Direccion']; ?>',
                                                '<?php echo $row['CP']; ?>',
                                                '<?php echo $row['FechaN']; ?>',
                                                '<?php echo $row['RFC']; ?>',
                                                '<?php echo $row['RegimenFiscal']; ?>'
                                            )">
                                            Modificar
                                        </button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Formulario oculto -->
                    <div id="editForm" style="display: none;">
                        <h3>Editar Alumno</h3>
                        <form method="POST">
                            <input type="hidden" name="id" id="form-id" />
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="form-nombre" name="nombre" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Paterno</label>
                                <input type="text" name="apellidoP" id="form-apellidoP" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Materno</label>
                                <input type="text" name="apellidoM" id="form-apellidoM" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <!-- Fecha de nacimiento -->
                                <label>Edad:</label>
                                <input type="text" name="fechaN" id="form-fechaN" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">CURP</label>
                                <input type="text" name="curp" id="form-curp" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nivel Educativo</label>
                                <select class="form-select" name="nivel" id="form-nivel">
                                    <option selected>Elige alguna opcion</option>
                                    <option>Preescolar</option>
                                    <option>Primaria</option>
                                    <option>Secundaria</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Grado</label>
                                <select class="form-select" name="grado" id="form-grado">
                                    <option selected>Elige alguna opcion</option>
                                    <option>1ro</option>
                                    <option>2do</option>
                                    <option>3ro</option>
                                    <option>4to</option>
                                    <option>5to</option>
                                    <option>6to</option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Modificar alumno"
                                name="btnModificarAlumno" />
                            <button type="button" class="btn btn-secondary" onclick="hideForm()">Cancelar</button>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                    <br>
                    <h3>Dar de baja alumnos</h3>
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Direccion</th>
                                    <th>Codigo Postal</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>RFC</th>
                                    <th>Regimen Fiscal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM padres";
                                $result_tasks = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ApellidoP']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ApellidoM']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Direccion']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['CP']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['FechaN']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['RFC']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['RegimenFiscal']; ?>
                                    </td>
                                    <td>
                                        <form method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                            <input type="submit" class="btn btn-danger" value="Eliminar"
                                                name="btnEliminarPadre" />
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
function showForm(id, nombre, apellidoP, apellidoM, edad, curp, nivelEducativo, grado) {
    // Rellenar los campos del formulario con los datos del alumno
    document.getElementById('form-id').value = id;
    document.getElementById('form-nombre').value = nombre;
    document.getElementById('form-apellidoP').value = apellidoP;
    document.getElementById('form-apellidoM').value = apellidoM;
    document.getElementById('form-fechaN').value = edad;
    document.getElementById('form-curp').value = curp;
    document.getElementById('form-nivel').value = nivelEducativo;
    document.getElementById('form-grado').value = grado;

    // Mostrar el formulario
    document.getElementById('editForm').style.display = 'block';
}

function hideForm() {
    // Ocultar el formulario
    document.getElementById('editForm').style.display = 'none';
}
</script>


<?php include('includes/footer.php'); ?>