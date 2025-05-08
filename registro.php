<?php
   // Conexión a la base de datos
   $servername = "localhost";
   $username = "root"; // Por defecto, el usuario es 'root'
   $password = ""; // La contraseña está vacía por defecto
   $dbname = "registro"; // Nombre de tu base de datos

   // Crear conexión
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Verificar conexión
   if ($conn->connect_error) {
       die("Conexión fallida: " . $conn->connect_error);
   }

   // Verificar si se envió el formularios
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $nombre = $_POST['nombre'];
       $email = $_POST['email'];
      $contraseña = $_POST['contraseña'];

       // Insertar datos en la base de datos
       $sql = "INSERT INTO usuarios ( nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";
       // Asegúrate de que la tabla 'usuarios' tenga las columnas 'nombre', 'email' y 'contraseña'  .

       if ($conn->query($sql) === TRUE) {
           echo "Registro exitoso";
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }
   }          

   $conn->close();
   ?>

   <!DOCTYPE html>
   <html>
   <head>
       <title>Registro-Delicias Frias</title>
       <link rel="icon" href="IMG/bannerjjj.png">
   </head>
   <body>
    <center>
      <div class="container">
       <h2>Registro de Usuario</h2>
       <form method="post" action="">
           Nombre: <input type="text" name="nombre" required><br>
           Email: <input type="email" name="email" required><br>
           Contraseña: <input type="password" name="contraseña" required><br>
           <input type="submit" value="Registrar">
       </form>
       </div>
       <h2>Iniciar Sesión</h2>
         <p>Al registrarte, aceptas nuestros <a href="#">Términos y Condiciones</a>.</p>
         <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p> 
         <bottom>regresa<a href="index.php">Inicio</a></bottom>
           
     </center>
         <style>
            body {
                font-family: Arial, sans-serif;
                background-color:#9becda;   
                margin:20px
                padding: 20px;
            }
              

            .container {
                max-width: 400px;
                margin: auto;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                color:rbg(255, 030, 0);
                text-align: center;
            }

            form {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            input[type="submit"] {
                background-color: #28a745;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #218838;
            }
            bottom {
                display: block;
                margin-top: 20px;
                text-align: center;
            }
            a {
                color: #007bff;
                text-decoration: none;
            }
   </body>
   </html>