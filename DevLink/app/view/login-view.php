<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLink - Iniciar Sesión</title>
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

                <!-- Formulario de login -->
                <form action="?controller=UserController&action=login" method="post">
                    <div class="col-md-12">
                        <label for="mail">Correo Electrónico</label>
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="josemaria@gmail.com" required>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>

                    <button type="submit" class="boton">Entrar</button>
                </form>
        </article>
    </main>
</body>
</html>