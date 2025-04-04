<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/producto.css">
    <link rel="icon" href="IMG/png.png">
    <title>Productos - Delicias Frias</title>
</head>
<body>
    
<section>
    <header>

        <nav class="navbar">
            <div class="logo">Delicias Frias</div>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.html">inicio</a></li>
                <li><a href="producto.html">Productos</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="blog.html">Blog</a></li>
            </ul>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
</section>


        <main class="container-world">
            <h1>Nuestros Productos</h1>
            <section class="productos">
                <div class="producto">
                    <img src="IMG/descarga4.png.png" alt="Producto 1">
                    <h2>Producto 1</h2>
                    <p>Helados de wanabana .</p>
                    <p class="precio">RD$45</p>
                    <button class="btn-comprar">Añadir al Carrito</button>
                </div>
                <div class="producto">
                    <img src="IMG/descarga1.png.jpg" alt="Producto 2">
                    <h2>Producto 2</h2>
                    <p>Helados de chinola.</p>
                    <p class="precio">RD$40</p>
                    <button class="btn-comprar">Añadir al Carrito</button>
                </div>
                <div class="producto">
                    <img src="IMG/descarga2.png.jpg" alt="Producto 3">
                    <h2>Producto 3</h2>
                    <p>Helados de bicocho.</p>
                    <p class="precio">RD$50</p>
                    <button class="btn-comprar">Añadir al Carrito</button>
                </div>
                <div class="producto">
                    <img src="IMG/descarga3.png.jpg" alt="Producto 4">
                    <h2>Producto 4</h2>
                    <p>Helados de fresa con leche.</p>
                    <p class="precio">$65</p>
                    <button class="btn-comprar">Añadir al Carrito</button>
                </div>
                <div class="producto">
                    <img src="IMG/descarga5.png.png" alt="Producto 5">
                    <h2>Producto 5</h2>
                    <p>Helados de tamarindo.</p>
                    <p class="precio">RD$30</p>
                    <button class="btn-comprar">Añadir al Carrito</button>
                </div>
            </section>
        </main>
    
   


<section class="pie">

    <footer class="footer">
        <ul class="social-icon">
            <li class="icon-elem">
                <a href="" class="icon">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>
            <li class="icon-elem">
                <a href="" class="icon">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
            <li class="icon-elem">
                <a href="" class="icon">
                    <ion-icon name="logo-tiktok"></ion-icon>
                </a>
            </li>
            <li class="icon-elem">
                <a href="" class="icon">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>
        </ul>
        <ul class="menu">
            <li class="menu-elem">
                <a href="index.html" class="menu-icon"> Inicio </a>
            </li>
            <li class="menu-elem">
                <a href="equipo.html" class="menu-icon"> Equipo </a>
            </li>
            <li class="menu-elem">
                <a href="contacto.html" class="menu-icon"> Contacto </a>
            </li>
            </li>
            <li class="menu-elem">
                <a href="index.html" class="menu-icon"> Sobre Nosotros </a>
            </li>
        </ul>
        <p class="text">&copy;@2025Año| Delicias Frias</p>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </footer>

</section>

<script>
    // Lógica para manejar "Añadir al carrito"
    document.querySelectorAll('.btn-comprar').forEach(button => {
        button.addEventListener('click', () => {
            alert('Producto añadido al carrito');
        });
    });
</script>


</body>
</html>