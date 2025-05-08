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
                <h2>Bienvenido a Delicias frias</h2>
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
            <div class="text-image">
                <img src="IMG/bannerjjj.png" alt="logo" class="imagen">
                <div class="texto">
                    <h2>Acerca de Nosotros</h2>
                    <br>
                    <p>Nuestra empresa nació como parte de un proyecto escolar que nos desafió a salir de nuestra zona de confort y desarrollar
                    un producto innovador que no solo cumpliera con una necesidad, sino que también tuviera el poder de llenar de felicidad
                    a nuestros clientes. Desde el principio, nos impulsó el deseo de crear algo especial, un producto que marcara la
                    diferencia en la vida de las personas.</p>
                    <br>
                    <p>Durante este proceso, aprendimos a trabajar en equipo, a identificar oportunidades en el mercado y enfrentar desafíos
                    reales. Comenzamos investigando qué aspectos de la vida cotidiana podrían ser mejorados con creatividad e ingenio, y
                    descubrimos que la felicidad genuina nace de los pequeños detalles.</p>
                </div>
            </div>
            <div class="caja-texto">
                <p>Sabemos que emprender no es fácil, pero este reto nos permitió descubrir habilidades que no sabíamos que teníamos y
                crecer personal y profesionalmente.</p>
            </div>
        </div>
        
    <div class="container-card">

   
        <div class="card">
            <figure>
                <img src="https://ahaslides.com/wp-content/uploads/2024/02/SEO7515-thumb.webp" />
            </figure>
            <div class="contenido-card">
            <h3>Mision</h3>
                <p>
                    Brindar a nuestros clientes helados de excelente calidad, elaborados con pasión y dedicación, en un
                    ambiente acogedor
                    que fomenta momentos especiales y memorables.
                </p>
    
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXNg1phCwz4PrNIBs-TQUqelwxNiKBWnmEyw&s" />
            </figure>
            <div class="contenido-card">
                <h3>vision</h3>
                <p>
                    Ser reconocidos como líderes en la elaboración de helados artesanales y tener un carrito o puesto en
                    cada esquina de todos el pais.
    
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="https://centresukha.com/wp-content/uploads/2024/06/whatsapp-image-2024-06-13-at-18.55.31.jpeg" />
            <div class="contenido-card">
                <h3>Valores</h3>
    
                <p>Excelencia, Responsabilidad, Integridad, Honestidad, Respeto, Creatividad, y Servicio.</p>
    
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
                    <a href="index.html" class="menu-icon"> Inicio </a>
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
