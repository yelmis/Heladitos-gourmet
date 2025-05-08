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
   </head>
   <body>
       <h2>Registro de Usuario</h2>
       <form method="post" action="">
           Nombre: <input type="text" name="nombre" required><br>
           Email: <input type="email" name="email" required><br>
           Contraseña: <input type="password" name="contraseña" required><br>
           <input type="submit" value="Registrar">
       </form>
   </body>
   </html>