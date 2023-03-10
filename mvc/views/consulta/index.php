<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div id="main">

        <h1 class="center consulta">Seccion Consulta </h1>
        <div id="respuesta" class="center"></div>
        <table width="100%">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tbody-alumnos">
                <?php include_once 'models/alumno.php'; ?>
                <?php foreach ($this->alumnos as $row) {
                    $alumno = new Alumno();
                    $alumno = $row;
                ?>
                    <tr id="fila-<?php echo  $alumno->matricula; ?>">
                        <td><?php echo $alumno->matricula; ?></td>
                        <td><?php echo $alumno->nombre; ?></td>
                        <td><?php echo $alumno->apellido; ?></td>
                        
                        <td><a href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Actualizar</a></td>
                        <td><button class="bEliminar" data-matricula="<?php echo $alumno->matricula; ?>">Eliminar</button></td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>

</html>