<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Tipo Get</title>
</head>
<body>
    <h1>Formulario GET</h1>

    <form action="./serve.php" method="get">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">

        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">

        <button type="submit">Mandar Datos</button>
    </form>

    <p>El atributo name es la forma de enviar los datos al servidor</p>
    <p>No mandar informacion sensible por GET</p>
</body>
</html>