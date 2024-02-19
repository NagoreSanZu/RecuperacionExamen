<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>INSERTAR MASCOTA</H1>
<form method="POST" action="/manzanas">
        @csrf
        <label for="tipoManzana">Tipo:</label>
        <input type="text" id="tipoManzana" name="tipoManzana"><br>


        <label for="precioKilo">Precio:</label>
        <input type="number" id="precioKilo" name="precioKilo"><br>

        <button type="submit">Insertar</button>
</form>

</body>
</html>