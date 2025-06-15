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
                        <input type="text" class="icon-input" id="buscar-entrada" placeholder="Busca entradas...">
                    </div>
                    <?php
                    if(isset($_SESSION['nombre'])){
                        echo "<button class='boton' onclick='window.addEntrada.showModal()'>
                                <i class='fas fa-plus'></i> <span>Nueva Charla</span>
                              </button>";
                    }
                    ?>
                </div>
            </section>
            <section class="foro-datatable">
                <ul class="tabs">
                    <li id="newest" class="tab active">Últimas conversaciones</li>
                    <?php
                    if(isset($_SESSION['nombre'])){
                        echo "<li id='own' class='tab'>Tus conversaciones</li>";
                    }
                    ?>
                </ul>
                <section id="otras-entradas" class="cards active">
                    <?php
                        if(!empty($data['otras'])){
                            foreach ($data['otras'] as $entrada) {
                                $hora = $entrada->getFecha()->format('H:i');
                                echo    "<div class='card-foro'>
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
                    <h3 class='no-result'>No hay entradas que se correspondan con lo que buscas</h3>                     
                </section>
                <section id="tus-entradas" class="cards">
                <?php
                        if(!empty($data['propias'])){
                            foreach ($data['propias'] as $entrada) {
                                $hora = $entrada->getFecha()->format('H:i');
                                echo    "<div class='card-foro'>
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
                            echo "<h3>Aún no has creado ninguna entrada en el foro</h3>";
                        }
                    ?>
                    <h3 class='no-result'>No hay entradas que se correspondan con lo que buscas</h3> 
                </section>
            </section>
        </article>
        <dialog id="addEntrada">
            <button onclick="window.addEntrada.close()" class="dialog__btn--cerrar"><i class="fa-solid fa-xmark"></i></button>
            <form action="?controller=ForoController&action=addEntrada" method="post">
                <input type="hidden" name="id_creador" id="id_creador" value="<?= $id_usuario ?>">
                <div>
                    <label for="titulo">Titulo de la entrada</label>
                    <input type="text" name="titulo" id="titulo" placeholder="No se hacer paginación en php...">
                </div>
                <div>
                    <label for="contenido">Contenido de la entrada</label>
                    <textarea name="contenido" id="contenidop" placeholder="Necesito ayuda con..."></textarea>
                </div>
                <input type="submit" class="boton" value="Crear Entrada"></input>
            </form>
        </dialog>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="/assets/js/header.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/foro.js"></script>
</body>
</html>