<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/general.css">
    <link rel="stylesheet" href="/assets/css/foro.css">
</head>
<body>
    <?php include_once("header.php"); ?>
    <main>
        <article class="article-cards">
            <section class="cards-title">
                <h1>Ofertas creadas por ti</h1>
                <div>
                    <div class="space-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" class="icon-input" id="buscar-entrada" placeholder="Busca ofertas...">
                    </div>
                    <button class='boton'>
                        <i class='fas fa-plus'></i> <span>Nueva Oferta</span>
                    </button>
                </div>
            </section>
            <section class="foro-datatable">
                <section id="otras-entradas" class="cards active">
                    <div class='card-foro'>
                        <div class='card-header'>
                            <h4>Frontend Junior con conocimientos en React</h4>
                            <div id='opciones'>
                                <button class='boton btn-editar' data-id='".$entrada->getId_entrada()."'  onclick='window.editEntrada.showModal()'>
                                    <i class='fa-solid fa-pen-to-square'></i>
                                </button>
                                <button class='boton btn-eliminar' data-id='".$entrada->getId_entrada()."'>
                                    <i class='fa-solid fa-trash'></i>
                                </button>
                            </div>
                        </div>
                        <p class='card-body'>Buscamos programador/a junior con conocimientos básicos de React y Tailwind para unirse a startup de e-learning.</p>
                        <div class='card-footer'>
                            <small><i class="fa-solid fa-heart"></i> 15</small>
                            <small><i class='fa-solid fa-calendar-days'></i> 02/06/2025  <i class='fa-solid fa-clock'></i>16:40</small>
                        </div>
                    </div>

                    <div class='card-foro'>
                        <div class='card-header'>
                            <h4>Desarrollador/a Full Stack para fintech</h4>
                            <div id='opciones'>
                                <button class='boton btn-editar' data-id='".$entrada->getId_entrada()."'  onclick='window.editEntrada.showModal()'>
                                    <i class='fa-solid fa-pen-to-square'></i>
                                </button>
                                <button class='boton btn-eliminar' data-id='".$entrada->getId_entrada()."'>
                                    <i class='fa-solid fa-trash'></i>
                                </button>
                            </div>
                        </div>
                        <p class='card-body'>Startup del sector financiero necesita perfil full stack con dominio de PHP y Vue.js. Trabajo híbrido desde Madrid.</p>
                        <div class='card-footer'>
                            <small><i class="fa-solid fa-heart"></i> 10</small>
                            <small><i class='fa-solid fa-calendar-days'></i> 01/06/2025  <i class='fa-solid fa-clock'></i>12:00</small>
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