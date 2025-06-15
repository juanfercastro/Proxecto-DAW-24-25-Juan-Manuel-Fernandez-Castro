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
                <h1>Encuentra empleo adaptado a tus necesidades</h1>
                <div>
                    <div class="space-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" class="icon-input" id="buscar-entrada" placeholder="Busca ofertas...">
                    </div>
                </div>
            </section>
            <section class="foro-datatable">
                <section id="otras-entradas" class="cards active">
                    <div class='card-foro'>
                        <div class='card-header'>
                            <h4>Se busca desarrollador backend</h4>
                        </div>
                        <p class='card-body'>Empresa tecnológica de A Coruña busca perfil backend con experiencia en Laravel y MySQL para proyecto de digitalización de PYMES.</p>
                        <div class='card-footer'>
                            <small>TechCoruña SL</small>
                            <small><i class='fa-solid fa-calendar-days'></i> 03/06/2025  <i class='fa-solid fa-clock'></i>10:15</small>
                        </div>
                    </div>

                    <div class='card-foro'>
                        <div class='card-header'>
                            <h4>Frontend Junior con conocimientos en React</h4>
                        </div>
                        <p class='card-body'>Buscamos programador/a junior con conocimientos básicos de React y Tailwind para unirse a startup de e-learning.</p>
                        <div class='card-footer'>
                            <small>EduGrow</small>
                            <small><i class='fa-solid fa-calendar-days'></i> 02/06/2025  <i class='fa-solid fa-clock'></i>16:40</small>
                        </div>
                    </div>

                    <div class='card-foro'>
                        <div class='card-header'>
                            <h4>Desarrollador/a Full Stack para fintech</h4>
                        </div>
                        <p class='card-body'>Startup del sector financiero necesita perfil full stack con dominio de PHP y Vue.js. Trabajo híbrido desde Madrid.</p>
                        <div class='card-footer'>
                            <small>FinSave</small>
                            <small><i class='fa-solid fa-calendar-days'></i> 01/06/2025  <i class='fa-solid fa-clock'></i>12:00</small>
                        </div>
                    </div>

                    <div class='card-foro'>
                        <div class='card-header'>
                            <h4>Prácticas remuneradas en desarrollo web</h4>
                        </div>
                        <p class='card-body'>Ofrecemos prácticas con posibilidad de incorporación. HTML, CSS, PHP y bases de datos. No se requiere experiencia previa.</p>
                        <div class='card-footer'>
                            <small>BitNova</small>
                            <small><i class='fa-solid fa-calendar-days'></i> 31/05/2025  <i class='fa-solid fa-clock'></i>09:30</small>
                        </div>
                    </div>

                    <div class='card-foro'>
                        <div class='card-header'>
                            <h4>Buscamos especialista en APIs REST</h4>
                        </div>
                        <p class='card-body'>Proyecto para integrar APIs de terceros en plataforma SaaS. Se requiere experiencia previa con autenticación y documentación (Swagger).</p>
                        <div class='card-footer'>
                            <small>CloudHub</small>
                            <small><i class='fa-solid fa-calendar-days'></i> 30/05/2025  <i class='fa-solid fa-clock'></i>14:50</small>
                        </div>
                    </div>

                    <div class='card-foro'>
                        <div class='card-header'>
                            <h4>Oferta remota: Programador/a en Node.js</h4>
                        </div>
                        <p class='card-body'>Empresa 100% remota busca desarrollador/a Node.js para backend de aplicación de gestión de tareas. Trabajo por objetivos.</p>
                        <div class='card-footer'>
                            <small>RemoteDev Inc.</small>
                            <small><i class='fa-solid fa-calendar-days'></i> 29/05/2025  <i class='fa-solid fa-clock'></i>17:25</small>
                        </div>
                    </div>
                    <div class='card-foro'>
                        <div class='card-header'>
                            <h4>Se busca a alguien que arregle impresoras</h4>
                        </div>
                        <p class='card-body'>Queremos alguien a mano que sepa ordenar papeles, rellenar excel y que nos arregle las impresoras si es que dejan de funcionar.</p>
                        <div class='card-footer'>
                            <small>Indalsu SL</small>
                            <small><i class='fa-solid fa-calendar-days'></i> 20/03/2025 <i class='fa-solid fa-clock'></i>15:45</small>
                        </div>
                    </div>
                </section>
            </section>
        </article>
        <dialog id="addEntrada">
            <button onclick="window.addEntrada.close()" class="dialog__btn--cerrar"><i class="fa-solid fa-xmark"></i></button>
            <form id="nuevaEntrada" method="post">
                <input type="hidden" name="id_creador" id="id_creador" value="<?= $id_usuario ?>">
                <div>
                    <label for="titulo">Titulo de la entrada</label>
                    <input type="text" name="titulo" id="titulo" placeholder="No se hacer paginación en php...">
                </div>
                <div>
                    <label for="contenido">Contenido de la entrada</label>
                    <textarea name="contenido" id="contenido" placeholder="Necesito ayuda con..."></textarea>
                </div>
                <input type="submit" class="boton" value="Crear Entrada">
            </form>
        </dialog>
        <dialog id="editEntrada">
            <button onclick="window.editEntrada.close()" class="dialog__btn--cerrar"><i class="fa-solid fa-xmark"></i></button>
            <form id="modificarEntrada" method="post">
                <input type="hidden" name="id_entrada" id="id_entrada" value="">
                <input type="hidden" name="id_creador" id="edit_id_creador" value="">
                <div>
                    <label for="edit_titulo">Titulo de la entrada</label>
                    <input type="text" name="titulo" id="edit_titulo" placeholder="No se hacer paginación en php...">
                </div>
                <div>
                    <label for="edit_contenido">Contenido de la entrada</label>
                    <textarea name="contenido" id="edit_contenido" placeholder="Necesito ayuda con..."></textarea>
                </div>
                <input type="submit" class="boton" value="Modificar Entrada">
            </form>
        </dialog>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="/assets/js/header.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/foro.js"></script>
</body>
</html>