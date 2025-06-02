<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Registrarse</h1>
    <a href="?controller=UserController&action=loginForm">Login</a>

    <?php
    if(isset($data['errores'])){
        $errores = explode(",", $data['errores']);
        foreach ($errores as $error) {
            echo "<p style='color:red'>$error</p>";
        }
    }
    ?>

    <form action="?controller=UserController&action=addUser" method="post">
      <div>
        <label for="tipo_user">Tipo de usuario</label>
        <select name="tipo_user" id="tipo_user" required>
            <option value="" disabled selected>Selecciona</option>
            <option value="developer">Desarrollador</option>
            <option value="empresa">Empresa</option>
        </select>
      </div>
      <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Jose Maria">
      </div>
      <div>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos">
      </div>
      <div>
        <label for="mail">Correo electrónico:</label>
        <input type="email" name="mail" id="mail">
      </div>
      <div>
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass">
      </div>
      <div>
        <label for="pass2">Confirmar la contraseña:</label>
        <input type="password" name="pass2" id="pass2">
      </div>

      <button type="submit">Registrarse</button>
    </form>
</body>
</html>