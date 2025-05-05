<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio</title>
    <link rel="stylesheet" href="estudiantes.css">
</head>
<body>
    <div class="fila-titulo">
        <h1>LISTADO DE ALUMNOS</h1>
    </div>
    <form action="formulario" class="formulariojaja">
    <div class="campo">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required>
    </div>

    <div class="campo">
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
    </div>

    <div class="campo">
        <label for="documento">Documento:</label>
        <input type="text" id="documento" name="documento" required>
    </div>

    <button type="button" class="boton-formulario-buscar">Buscar</button>
    <button type="button" class="boton-formulario">Mostrar Todos</button>
    <button type="button" class="boton-formulario">Crear Nuevo</button>
    </form>
    <table class="table">
        <thead>
            <tr class="tablita">
                <th class="identificacion">IDENTIFICACION</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th class="documento">DOCUMENTO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
    </table>

</body>
</html>