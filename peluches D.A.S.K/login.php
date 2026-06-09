

<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$base_datos = "peluches-dask";

$enlace = mysqli_connect ($servidor, $usuario, $contraseña, $base_datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <header>
    <img src="img/logo.png" alt="logo" width="250">
    <h1>Peluches D.A.S.K</h1>

    <nav>
        <a href="index.html">Inicio</a>
        <a href="productos.html">Productos</a>
        <a href="pedidos.php">Pedidos</a>
    </nav>
</header>
    
    <form class = "login" action="#" method="post">

    <input type="text" name="nombre" placeholder="Nombre">
    <input type="email" name="correo" placeholder="Correo">
    <input type="text" name="telefono" placeholder="Teléfono">

    <input type="submit" name="registro">
    <input type="reset">

    </form>

</body>
</html>

<?php

if (isset($_POST['registro'])){

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $insertarDatos = "INSERT INTO login VALUES('$nombre','$correo','$telefono','')";

    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}    
?>

<section class="contacto">
    <h2>Contacto</h2>

    <div class="info-contacto">
        <p>📍 Calle 54 F # 43 A 76 SUR</p>
        <p>📞 300 123 4567</p>
        <p>📧 peluchesDASK@gmailcom</p>
    </div>

    <h3>Síguenos</h3>
    <div class="redes">
        <a href="https://facebook.com" target="_blank" class="btn facebook">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="https://instagram.com" target="_blank" class="btn instagram">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="https://tiktok.com" target="_blank" class="btn tiktok">
            <i class="fab fa-tiktok"></i>
        </a>
    </div>
</section>