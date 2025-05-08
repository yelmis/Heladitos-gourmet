<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/inicio.css">
    <link rel="stylesheet" href="CSS/navegador.css">
    <link rel="icon" href="IMG/bannerjjj.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Inicio - Delicias frias</title>
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
          <li class="registro"><a href="registro.php">registro</a></li>
          <li class="login"><a href="login.php">Iniciar Sesión</a></li>
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


<div class="container-world">
    <section>
        <div class="container_welcome">
              <div class="section-welcome">
                <h2>Nuestras Novedades</h2>
                <br>
                <p>¡Disfruta de los mejores helados gourmet de la ciudad!</p>
              </div>

              <div class="container-img">

              </div>
        </div>

    </section>
       <div class="SONOTRO" id="SONOTRO"></div>
    <section id="destacados">
        <div class="container-destacados">
            <h2>Nuestros Destacados</h2>
            <p>Descubre los sabores más populares de Heladitos Gourmet, ¡te encantarán!</p>
            <div class="destacados-grid">
                <div class="destacado-item">
                    <img src="https://remolacha.net/wp-content/uploads/2020/07/Screen-Shot-2020-07-25-at-10.29.37-AM.png" alt="Helado de batata">
                    <h3>Batata con pasas</h3>
                    <p>Un clásico irresistible con el mejor sabor de nuestro Helados.</p>
                </div>
                <div class="destacado-item">
                    <img src="https://s.yimg.com/ny/api/res/1.2/fpDm3mLK0xS.LywMrkOb2A--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTY0MA--/https://media.zenfs.com/es/animal_gourmet_468/8d414eb1766126309c35317bed602150" alt="Helado de coco">
                    <h3>cocos</h3>
                    <p>El sabor fresco y dulce de las mejores piñas.</p>
                </div>
                <div class="destacado-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRUpMBguF7lKll9joD7FFNh5LMU_Sz6sBX7Q&s" alt="Helado de Mango">
                    <h3>Mango Tropical</h3>
                    <p>Un toque tropical con la frescura del mango.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
      
        <div class="container">
             <h2 class="estrella"> Nosotros sabor estrella</h2>
            <div class="text-image">
                <img src="https://remolacha.net/wp-content/uploads/2020/07/Screen-Shot-2020-07-25-at-10.29.37-AM.png" alt="logo" class="imagen">
                <div class="texto">
                   
                    <br>
                    <p>Descubre el sabor que nos representa. Nuestro helado de batata con pasas es una deliciosa fusión de tradición y originalidad.
                         Creado con batatas dulces seleccionadas y pasas jugosas, este sabor estrella rinde homenaje a nuestras raíces con una textura suave,
                          cremosa y un dulzor natural inconfundible. 
                        Cada cucharada es un viaje al corazón de lo auténtico, ideal para quienes buscan algo diferente, casero y lleno de identidad.</p>
                    <br>
                    
                </div>
            </div>
            <div class="caja-texto">
                <p> Donde la tradición se encuentra con la innovación. 
                    Este helado es un homenaje a nuestras raíces, elaborado con ingredientes frescos y naturales que resaltan el sabor auténtico de la batata.
                     Su textura cremosa y su dulzura equilibrada lo convierten en una experiencia única que deleitará a todos los paladares. 
                     ¡No te lo pierdas!</p>

                </p>
            </div>
        </div>
        
                <center><h2 id="otros">Otros sabores</h2></center>
        <div class="container-card">

              
        <div class="card">
            <figure>
                <img src="IMG/descarga4.png.png" />
            </figure>
            <div class="contenido-card">
            <h3>Helados de wanabana</h3>
                <p>
                Refrescantes, cremosos y con el sabor tropical único de la guanábana. 
                Un helado suave que conquista con su dulzura natural y un toque exótico que encanta a todos.
                </p>
    
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="IMG/descarga3.png.jpg" />
            </figure>
            <div class="contenido-card">
                <h3>Helados de fresa con leche</h3>
                <p>
                Helados de fresa con leche son una delicia cremosa que combina frescura y dulzura.
                Cada bocado es un viaje a un mundo de sabor, ideal para disfrutar en cualquier momento.
                </p>
    
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="IMG/descarga1.png.jpg" />
            <div class="contenido-card">
                <h3>Helados de chinola.</h3>
    
                <p>Ácido, refrescante y lleno de sabor tropical. Nuestro helado de chinola es 
                    una explosión de frescura perfecta para los que aman lo cítrico con un toque cremoso.   
                    </p>
    
            </div>
        </div>
    </div>


    </section>

  

   </div> 

    <section class="pie">
    
        <footer class="footer">
            <ul class="social-icon">
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>
                <li class="icon-elem">
                    <a href="https://www.instagram.com/delicias_frias_srl/" class="icon">
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
                    <a href="index.php" class="menu-icon"> Inicio </a>
                </li>
                <li class="menu-elem">
                    <a href="equipo.php"class="menu-icon"> Equipo </a>
                </li>
                <li class="menu-elem">
                    <a href="contacto.html" class="menu-icon"> Contacto </a>
                </li>
                <li class="menu-elem">
                    <a href="#SONOTRO" class="menu-icon"> Sobre Nosotros </a>
                </li>
            </ul>
            <p class="text">&copy;2024-2025| Delicias frias</p>

                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </footer>
    
    </section>
  
    <script src="jS/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

</body>
</html>
