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

        <h1 class="center error">Detalle de  <?php echo $this->mensaje; ?></h1>

        <div class="center">
           
        </div>
        <form action="<?php echo constant('URL') ?>consulta/actualizarAlumno" method="POST">
            <p><label for"matricula">Matricula</label></p>

            <input type="text" name="matricula" value="<?php echo $this->alumno->matricula; ?>"  disabled>
            <p><label for"nombre">Nombre</label></p>

            <input type="text" name="nombre" id="nombre" value="<?php echo $this->alumno->nombre; ?>"  required>
            <p><label for"apellido">apellido</label></p>

            <input type="text" name="apellido" id="apellido" value="<?php echo $this->alumno->apellido; ?>" required><br><br>
            <button type="submit" name="btnSubmit">Actualizar alumno</button>

        </form>
    </div>
    <?php require 'views/footer.php'; ?>
</body>

</html>