<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contacto.css">
    <link rel="icon" href="IMG/bannerjjj.png">
    <link rel="stylesheet" href="CSS/navegador.css">
    <title>Contacto -  Delicias Frias </title>
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


    ''
    
    <div class="container-world">
        <center>
        <section id="body-contacto">
        <form action="https://formsubmit.co/pichardojesus831@gmail.com" method="POST">
      <h2>Contacto</h2>
    <div class="input-group">
        <label for="name"></label>
        <input type="text" name="name" id="name" placeholder="Nombre" >
        <label for="phone"></label>
        <input type="tel" name="phone" id="phone" placeholder="Telefono">
        <label for="email"></label>
        <input type="email" name="email" id="email" placeholder="Email">
        <label for="message"></label>
        <textarea name="massage" id="message" cols="20" rows="4" placeholder="Mensaje"></textarea>
     <div class="form-text">
        <a href="#">Polictica de Privacidad</a>
        <a href="#">Terminos y condiciones</a>
     </div> 
     <br>
     <input class="btn" type="submit" value="Enviar">
   
    </div>
     </form>
    </center>
    </section>
    <br>
    <br>
    
    <div class="black">
        <center>
            <h2>Mapa</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d787.6028654419711!2d-70.70271094989803!3d19.52383096510517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sdo!4v1739381960000!5m2!1ses-419!2sdo" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>
      </div>
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
                    <a href="" class="icon">
                        <ion-icon name="logo-instagram">https://www.instagram.com/delicias_frias_srl/</ion-icon>
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
                <li class="menu-elem">
                    <a href="index.php"class="menu-icon"> Sobre Nosotros </a>
                </li>
            </ul>
            <p class="text">&copy; 2025Año| Delicias frias</p>

                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </footer>
    
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src=""></script>





</body>
</html>