<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Tipo Get</title>
</head>
<body>
    <h1>Tipos de Input</h1>

    <!-- Para mandar imagenes debemos cambiar el tipo de encriptacion -->
    <form action="./serve.php" method="post" enctype="multipart/form-data">

        <!-- Input Simples -->
        <!-- <label for="name">Nombre</label>
        <input type="text" name="nombre" id="name"> -->

        <!-- Input con Arreglos -->
        <!-- <label>Personas: </label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]"> -->

        <!-- Arreglos Asociativos -->
        <!-- <label>Personas: </label>
        <input type="text" name="persona[nombre]">
        <input type="email" name="persona[email]">
        <input type="number" name="persona[edad]"> -->

        <!-- CheckBox
        <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="Esta marcado">
        <input type="checkbox" name="list3"> -->

        <!-- Radios -->
        <!-- <label for="bolivia">Bolivia</label>
        <input type="radio" id="bolivia" name="pais" value="Bolivia">

        <label for="chile">Chile</label>
        <input type="radio" id="chile" name="pais" value="Chile">

        <label for="colombia">Colombia</label>
        <input type="radio" id="colombia" name="pais" value="Colombia"> -->

        <!-- Multiples Archivos -->
        <label for="imagenes">Subes tus imágenes</label>
        <!-- Importante colocar multiple en la propiedades -->
        <input type="file" name="imagenes[]" multiple id="imagenes">

        <button type="submit">Mandar Datos</button>
    </form>
</body>
</html>