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
                <h1>Conecta, aprende y ayuda a otros desarrolladores</h1>
                <div>
                    <div class="space-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" class="form-control icon-input" id="buscar-entrada" placeholder="Busca entradas...">
                    </div>
                    <button class="boton">
                        <i class="fas fa-plus"></i> <span>Nueva Charla</span>
                    </button>
                </div>
            </section>
            <section class="foro-datatable">
                <ul class="tabs">
                    <li id="newest" class="tab active">Últimas conversaciones</li>
                    <li id="own" class="tab">Tus conversaciones</li>
                </ul>
                <section id="otras-entradas" class="cards">
                    <?php
                        if(!empty($data['otras'])){
                            foreach ($data['otras'] as $entrada) {
                                $hora = $entrada->getFecha()->format('H:i');
                                echo    "<div id='card'>
                                            <div class='card-header'>
                                                <div class='imagen-icon'>
                                                    <img src='/assets/img/tipo-random.jpg' alt='Imagen de perfil'>
                                                </div>
                                                <h4>".$entrada->getTitulo()."</h4>
                                            </div>
                                            <p class='card-body'>".$entrada->getContenido()."</p>
                                            <div class='card-footer'>
                                                <small></small>
                                                <small><i class='fa-solid fa-calendar-days'></i> ".$entrada->getFecha()->format('d/m/Y')."  <i class='fa-solid fa-clock'></i>".$entrada->getFecha()->format('H:i')."</small>
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