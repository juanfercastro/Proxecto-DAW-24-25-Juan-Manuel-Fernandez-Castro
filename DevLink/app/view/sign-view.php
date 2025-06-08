<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLink - Registro</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/general.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/login.css" type="text/css">
</head>
<body>
  <main>

  <article class="card">
    <a href="/index.html" class="logo">
        <img src="/assets/img/DevLink-login.png" alt="enlace de vuelta al inicio" class="logo">
    </a>

    <?php
        if(isset($data['errores'])){
            $errores = explode(",", $data['errores']);
            echo "<ul>";
            foreach ($errores as $error) {
                echo "<li>".$error."</li>";
            }
            echo "</ul>";
        }
    ?>

    <!-- Formulario de login -->
    <form action="?controller=UserController&action=addUser" method="post">
    <div class="col-12 col-md-12">
        <label for="tipo_user">Tipo de usuario</label>
        <select name="tipo_user" id="tipo_user" class="form-control" required>
            <option value="" disabled selected>Selecciona tipo...</option>
            <option value="developer">Desarrollador</option>
            <option value="empresa">Empresa</option>
        </select>
      </div>
      <div class="col-md-12">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Jose Maria" required>
      </div>
      <div class="col-md-12">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Recio Colmenero">
      </div>
      <div class="col-md-12">
        <label for="mail">Correo electrónico</label>
        <input type="email" name="mail" id="mail" class="form-control" placeholder="josemariarecio@gmail.com" required>
      </div>
      <div class="col-md-12">
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña" required>
      </div>
      <div class="col-md-12">
        <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Repetir contraseña" required>
      </div>

      <button type="submit" class="boton">Registrarse</button>
    </form>
    <p>Ya tienes una cuenta? <a href="?controller=UserController&action=signForm">Entra</a>!</p>
  </article>
  </main>
</body>
</html>