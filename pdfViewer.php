<?php
$directorio = "/var/www/webdav/comprobantes";

$archivos = scandir($directorio);
$archivos = array_diff($archivos, array('..', '.')); // Eliminar las referencias al directorio padre y al directorio actual

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/pdfViewerStyle.css">
    <link rel="shortcut icon" href="Images/logoIcon.png" />
    <title>Comprobantes - Saloc</title>
</head>
<body>
    <header>
        <div class="logoBar">
            <a href="index.html"><img src="Images/logoSaloc2.png" alt="Saloc"/></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="Registration.html">Registro</a></li>
                <li><a href="#">Productos</a>
                    <ul>
                        <li><a href="Clothes.html">Ropa</a></li>
                        <li><a href="Shoes.html">Zapatos</a></li>
                        <li><a href="Jewelry.html">Joyería</a></li>
                    </ul>
                </li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Salir</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="arch">
            <h1>Comprobantes de compra generados</h1>
            <ul>
                <?php foreach ($archivos as $archivo) : ?>
                    <li><a href="Images/<?php echo $archivo; ?>" target="_blank"><?php echo $archivo; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
    <footer>
        <div class="divContact">
            <img src="Images/logoSaloc2.png" alt="Saloc">
            <p><span>Nombre: </span>Salcedo Monroy Joshua David 22110109 4P</p>
            <p><span>Correo: </span>a22110109@ceti.mx</p>
            <p><span>Materia: </span>Programación WEB - Bases de datos</p>
            <p><span>Ubicación: </span><a href="https://goo.gl/maps/JqHEX1eEVCcDfjn58">Jalisco Mexico</a></p>
        </div>
        <div class="divInfo">
            <p>Esta es una pagina para el proyecto integrador de Programación web I y Base de datos I que comprender
                la creación del frontEnd y BackEnd sin la ayuda de ninguno framework o librería que facilite ninguno de
                estos ámbitos.
                Para el aparatado de frontEnd se utilizo html y css solamente, para el apartado de backEnd se utilizo
                php y como base de datos mysql. PROYECTO SIN FINES LE LUCRO</p>
        </div>
    </footer>
</body>
</html>
