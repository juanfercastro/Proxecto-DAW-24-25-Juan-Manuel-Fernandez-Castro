<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Inicia Sesion</h1>
    <a href="?controller=UserController&action=signForm">Registrarse</a>

    <?php
    if(isset($data['errores'])){
        $errores = explode(",", $data['errores']);
        foreach ($errores as $error) {
            echo "<p style='color:red'>".$error."</p>";
        }
    }
    ?>

    <form action="?controller=UserController&action=login" method="post">
      <label for="mail">Correo electrónico</label>
      <input type="email" name="mail" id="mail" placeholder="josemaria@gmail.com"><br>
      <label for="pass">Contraseña</label>
      <input type="password" name="pass" id="pass">
      <button type="submit">Login</button>
    </form>
</body>
</html>