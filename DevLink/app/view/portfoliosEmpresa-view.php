<?php
if(isset($_SESSION['id'])){
    $id_usuario = $_SESSION['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/general.css">
    <link rel="stylesheet" href="/assets/css/foro.css">
</head>
<body>
    <?php include_once("header.php"); ?>
    <main>
        <article class="article-cards">
            <section class="cards-title">
                <h1>Encuentra al candidato perfecto</h1>
                <div>
                    <div class="space-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" class="icon-input" id="buscar-entrada" placeholder="Busca desarrolladores...">
                    </div>
                </div>
            </section>
            <section class="foro-datatable">
                <section id="otras-entradas" class="cards active">
                <div class='card-foro'>
    <div class='card-header'>
        <div class='imagen-icon'>
            <img src='/assets/img/tipo-random.jpg' alt='Imagen de perfil'>
        </div>
        <h4>Laura Fernández</h4>
    </div>
    <p class='card-body'>Desarrolladora frontend apasionada por el diseño accesible y la experiencia de usuario. Fuerte dominio de React y Figma.</p>
    <div class='card-footer'>
        <small>Frontend</small>
        <small><i class='fa-solid fa-calendar-days'></i> 28/05/2025  <i class='fa-solid fa-clock'></i>12:14</small>
    </div>
</div>

<div class='card-foro'>
    <div class='card-header'>
        <div class='imagen-icon'>
            <img src='/assets/img/tipo-random.jpg' alt='Imagen de perfil'>
        </div>
        <h4>Carlos Míguez</h4>
    </div>
    <p class='card-body'>Ingeniero de software con experiencia en PHP, Laravel y bases de datos relacionales. Especial interés en seguridad web.</p>
    <div class='card-footer'>
        <small>Backend</small>
        <small><i class='fa-solid fa-calendar-days'></i> 26/05/2025  <i class='fa-solid fa-clock'></i>09:45</small>
    </div>
</div>

<div class='card-foro'>
    <div class='card-header'>
        <div class='imagen-icon'>
            <img src='/assets/img/tipo-random.jpg' alt='Imagen de perfil'>
        </div>
        <h4>Sofía Delgado</h4>
    </div>
    <p class='card-body'>Fullstack con experiencia en Node.js, Vue y PostgreSQL. Apasionada por la eficiencia en el desarrollo ágil.</p>
    <div class='card-footer'>
        <small>Fullstack</small>
        <small><i class='fa-solid fa-calendar-days'></i> 30/05/2025  <i class='fa-solid fa-clock'></i>17:32</small>
    </div>
</div>

<div class='card-foro'>
    <div class='card-header'>
        <div class='imagen-icon'>
            <img src='/assets/img/tipo-random.jpg' alt='Imagen de perfil'>
        </div>
        <h4>Diego Rivas</h4>
    </div>
    <p class='card-body'>Técnico en sistemas reconvertido a programador backend. Experto en APIs REST y gestión de servidores Linux.</p>
    <div class='card-footer'>
        <small>Backend</small>
        <small><i class='fa-solid fa-calendar-days'></i> 27/05/2025  <i class='fa-solid fa-clock'></i>14:20</small>
    </div>
</div>

<div class='card-foro'>
    <div class='card-header'>
        <div class='imagen-icon'>
            <img src='/assets/img/tipo-random.jpg' alt='Imagen de perfil'>
        </div>
        <h4>Elena Paredes</h4>
    </div>
    <p class='card-body'>Diseñadora UI con sólidos conocimientos de HTML/CSS y JavaScript. En busca de proyectos que mezclen arte y código.</p>
    <div class='card-footer'>
        <small>Frontend</small>
        <small><i class='fa-solid fa-calendar-days'></i> 25/05/2025  <i class='fa-solid fa-clock'></i>10:50</small>
    </div>
</div>

<div class='card-foro'>
    <div class='card-header'>
        <div class='imagen-icon'>
            <img src='/assets/img/tipo-random.jpg' alt='Imagen de perfil'>
        </div>
        <h4>Mario López</h4>
    </div>
    <p class='card-body'>Desarrollador junior entusiasta del software libre. Aprende rápido y colabora activamente en comunidades de código abierto.</p>
    <div class='card-footer'>
        <small>Fullstack</small>
        <small><i class='fa-solid fa-calendar-days'></i> 29/05/2025  <i class='fa-solid fa-clock'></i>16:10</small>
    </div>
</div>
                   
                </section>
            </section>
        </article>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="/assets/js/header.js"></script>
</body>
</html>