<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Tipo Get</title>
</head>
<body>
    <h1>Validaciones de Envio de Formulario</h1>

    <!-- Validar en el servidor si envia la informacion -->
    <form action="./serve.php" method="post" enctype="multipart/form-data">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">

        <button type="submit" name="envio" >Mandar Datos</button>
    </form>
</body>
</html>