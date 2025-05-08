<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/producto.css">
    <link rel="stylesheet" href="CSS/navegador.css">
    <link rel="icon" href="IMG/png.png">
    <title>Productos - Delicias Frias</title>
</head>
<body>
    
<section>
  <header>
    <div class="top-bar">
      <!-- Menú de navegación dentro del banner -->
      <nav>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        <ul id="nav-links">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="producto.php">Productos</a></li>
          <li><a href="blog.php">Novedades</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <!-- Fondo oscuro cuando el menú está abierto -->
    <div class="overlay" id="overlay" onclick="toggleMenu()"></div>
  </header>


       <script>
        function toggleMenu() {
    document.getElementById("nav-links").classList.toggle("active");
    document.getElementById("overlay").classList.toggle("active");
  }
       </script>
        
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
                    <ion-icon name="logo-instagram"> https://www.instagram.com/delicias_frias_srl/</ion-icon>
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
                <a href="index.php"class="menu-icon"> Inicio </a>
            </li>
            <li class="menu-elem">
                <a href="equipo.php"class="menu-icon"> Equipo </a>
            </li>
            <li class="menu-elem">
                <a href="contacto.php"class="menu-icon"> Contacto </a>
            </li>
            </li>
            <li class="menu-elem">
                <a href="index.php"class="menu-icon">sobre nosotros</a>
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