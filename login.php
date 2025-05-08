<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Usuario por defecto en XAMPP
$password = ""; // Contraseña vacía por defecto en XAMPP
$dbname = "registro"; // Cambia por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Inicializar mensaje
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Obtener datos del formulario
    $email = $conn->real_escape_string($_POST['email']);
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $contraseña = $_POST['contraseña']; // No escapamos la contraseña para la verificación
    
    // Verificar si el usuario existe en la tabla usuarios
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND nombre = '$nombre' LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña (suponiendo que está almacenada como hash)
        if (password_verify($contraseña, $row['contraseña'])) {
            $message = "Inicio de sesión exitoso. ¡Bienvenido, " . htmlspecialchars($nombre) . "!";
        } else {
            $message = "Contraseña incorrecta. Por favor, verifica tus datos.";
        }
    } else {
        $message = "Usuario o email incorrectos. Por favor, verifica tus datos.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="CSS/inicio.css" />
  

</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form method="post" action="">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required />
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="tu@email.com" required />
            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" placeholder="Tu contraseña" required />
            <button type="submit">Entrar</button>
        </form>
        <?php if ($message): ?>
            <div class="message <?php echo strpos($message, 'exitoso') !== false ? 'success' : 'error'; ?>">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
</content>
</create_file>
