<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js"></script>
</head>
<body>
    <div id="dialogoverlay"></div>
    <div id="dialogbox">
        <div>
            <div id="dialogboxhead"></div>
            <div id="dialogboxbody"></div>
            <div id="dialogboxfoot"></div>
        </div>
    </div>

    <div class="dive2">
        <h1>Resultados</h1>
        <img src="img/imagen_perfil.jpg" class="profile-img">

        <div class="datos-recibidos">
            <?php
                if($_POST){
                    $nombre = $_POST['nombre'];
                    $edad = $_POST['edad'];
                    $ciudad = $_POST['ciudad'];
                    $pasatiempo = $_POST['pasatiempo'];

                    echo "<p><strong>Nombre:</strong> $nombre</p>";
                    echo "<p><strong>Edad:</strong> $edad años</p>";
                    echo "<p><strong>Ciudad:</strong> $ciudad</p>";
                    echo "<p><strong>Pasatiempo:</strong> $pasatiempo</p>";
                }
            ?>
        </div>

        <h2>¡Bien hecho!</h2>
        
        <button onclick="Alert.render('¿Deseas registrar a otra persona?')">
            Finalizar Registro
        </button>
    </div>
</body>
</html>