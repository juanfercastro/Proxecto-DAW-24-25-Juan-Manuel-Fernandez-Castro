<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLink - Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                <form action="?controller=UserController&action=login" method="post">
                    <div class="col-md-12 space-icon">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" class="form-control icon-input" id="mail" name="mail" placeholder="Email" required>
                    </div>
                    
                    <div class="col-md-12 space-icon">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" class="form-control icon-input" id="pass" name="pass" placeholder="Password" required>
                    </div>

                    <button type="submit" class="boton">Entrar</button>
                </form>
                <p>Aún no estás registrado? Hazlo <a href="?controller=UserController&action=signForm">aquí</a>!</p>
        </article>
    </main>
</body>
</html>