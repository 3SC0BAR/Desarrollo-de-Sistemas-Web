<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Captura de Datos</title>
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive">
        <h1>Captura de datos personales</h1>
        <br>
        <h2>Ingresa los datos que se te piden</h2>
        <br>
        <p>Mi primera encuesta</p>
        <hr>

        <form action="resultados.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
            <br>
            <label for="ciudad">Ciudad donde vives:</label>
            <input type="text" id="ciudad" name="ciudad" required>
            <br>
            <label for="pasatiempo">Pasatiempo favorito:</label>
            <input type="text" id="pasatiempo" name="pasatiempo" required>
            <br><br>
            <button type="submit">Ingresar datos</button>
        </form>
    </div>
</body>
</html>