<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pedidos - D.A.S.K</title>
    <link rel="stylesheet" href="CSS/carrito.CSS">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
</head>

<body>

<header>
    <img src="img/logo.png" alt="logo" width="250">
    <h1>Carrito</h1>

    <nav>
        <a href="index.html">Inicio</a> 
        <a href="Login.html">Login</a>
        <a href="compras.html">Facturas</a>

    </nav>
</header>

    <form class = "pedidos" action="#" method="post">

    <input type="text" name="nombre" placeholder="Nombre del producto">
    <input type="text" name="cantidad" placeholder="Cantidad">
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="text" name="destinatario" placeholder="Destinatario">

    <input type="submit" name="registro">
    <input type="reset">

    </form>

<div class="carrito-container">

    <div id="lista-carrito"></div>

    <h2>Total: $<span id="total">0</span></h2>

    <button class="btn-finalizar" onclick="finalizarCompra()">Finalizar compra</button>
    <button class="btn-vaciar" onclick="vaciarCarrito()">Vaciar Carrito</button>

</div>

<script src="JS/carrito.js"></script>

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

</body>
</html>