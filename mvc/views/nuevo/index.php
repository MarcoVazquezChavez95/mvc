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

        <h1 class="center error">Seccion de Nuevo</h1>

        <div class="center">
            <?php echo $this->mensaje; ?>
        </div>
        <form action="<?php echo constant('URL') ?>nuevo/registrarAlumno" method="POST">
            <p><label for"matricula">Matricula</label></p>
            <input type="text" name="matricula" id="matricula" placeholder="Matricula" required>
            <p><label for"nombre">Nombre</label></p>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            <p><label for"apellido">apellido</label></p>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido" required><br><br>
            <button type="submit" name="btnSubmit">Registrar</button>

        </form>
    </div>
    <?php require 'views/footer.php'; ?>
</body>

</html>