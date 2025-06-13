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
                <h1>Bienvenido al Foro</h1>
                <p>Conecta, aprende y ayuda a otros desarrolladores</p>
                <div style="margin-top: 16px;">
                    <button class="btn" style="background: white; color: var(--primary-blue); margin-right: 12px;" onclick="toggleNewPost()">
                        <i class="fas fa-plus"></i> Nueva Charla
                    </button>
                    <button class="btn btn-outline" style="color: white; border-color: white;">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                </div>
            </section>
            <section class="foro-datatable">
                <ul class="tabs">
                    <li>Últimas conversaciones</li>
                    <li>Tus conversaciones</li>
                </ul>
                <section id="otras-entradas" class="cards active">
                    <?php
                        if(!empty($data['otras'])){
                            foreach ($data['otras'] as $entrada) {
                                $hora = $entrada->getFecha()->format('H:i');
                                echo    "<div id='entrada'>
                                            <div class='card-header'>
                                                <div class='imagen-icon'>
                                                    <img src='/assets/img/tipo-random.jpg' alt='Imagen de perfil'>
                                                </div>
                                                <h4>".$entrada->getTitulo()."</h4>
                                            </div>
                                            <p class='card-body'>".$entrada->getContenido()."</p>
                                            <div class='card-footer'>
                                                <small></small>
                                                <small>".$entrada->getFecha()->format('d/m/Y H:i')."</small>
                                            </div>
                                        </div>";
                            }
                        }else{
                            echo "<h3>De momento no existen entradas en el foro</h3><h4>Sé el primero!</h4>";
                        }
                    ?>                    
                </section>
                <section id="tus-entradas" class>
                <?php
                        if(!empty($data['propias'])){
                            foreach ($data['propias'] as $entrada) {
                                $hora = $entrada->getFecha()->format('H:i');
                                echo    "<div id='card'>
                                            <div class='card-header'>
                                                <div class='imagen-icon'>
                                                    <img src='' alt='Imagen de perfil'>
                                                </div>
                                                <h4>".$entrada->getTitulo()."</h4>
                                            </div>
                                            <p class='card-body'>".$entrada->getContenido()."</p>
                                            <div class='card-footer'>
                                                <small></small>
                                                <small>".$entrada->getFecha()->format('d/m/Y H:i')."</small>
                                            </div>
                                        </div>";
                            }
                        }else{
                            echo "<h3>Aún no has creado ninguna entrada en el foro</h3>";
                        }
                    ?> 
                </section>
            </section>
        </article>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="/assets/js/header.js"></script>
</body>
</html>