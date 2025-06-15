<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/general.css">
    <link rel="stylesheet" href="/assets/css/portfolio.css">
</head>
<body>
    <?php include_once("header.php"); ?>
    <main>
        <article class="article-cards">
        <!-- Portfolio Header -->
        <section class="portfolio-header">
            <div class="container">
                <h1>José María Martínez</h1>
                <p>Desarrollador Full Stack</p>
            </div>
        </section>

        <!-- Portfolio Content -->
        <div class="portfolio-content">
                <!-- About Section -->
                <section class="resumen portfolio-section">
                    <h2>Sobre mí</h2>
                    <p>Desarrollador Full Stack con más de 3 años de experiencia creando aplicaciones web modernas y escalables. Especializado en React, Node.js y bases de datos relacionales. Apasionado por crear soluciones elegantes a problemas complejos.</p>
                    
                    <div>
                        <h3>Tecnologías</h3>
                        <div class="tecnologias">
                            <p>React</p>
                            <p>Node.js</p>
                            <p>TypeScript</p>
                            <p>PostgreSQL</p>
                            <p>AWS</p>
                        </div>
                    </div>
                </section>

                <!-- Projects Section -->
                <section class="proyects portfolio-section">
                    <h2>Proyectos</h2>
                    
                    <div class="cards">
                        <div class="card">
                            <div>
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h3>E-commerce Platform</h3>
                            <p>Plataforma de comercio electrónico completa con carrito de compras, procesamiento de pagos y panel de administración.</p>
                            <div>
                            <a href="#" class="boton">Ver Proyecto</a>
                            </div>
                        </div>

                        <div class="project-card card">
                            <div>
                                <i class="fas fa-tasks"></i>
                            </div>
                            <h3>Task Manager</h3>
                            <p>Aplicación de gestión de tareas con funcionalidades colaborativas, notificaciones en tiempo real y reportes.</p>
                            <div>
                                <a href="#" class="boton">Ver Proyecto</a>
                            </div>
                        </div>

                        <div class="project-card card">
                            <div>
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Analytics Dashboard</h3>
                            <p>Dashboard de análisis con visualizaciones interactivas, filtros avanzados y exportación de datos.</p>
                            <div>
                                <a href="#" class="boton">Ver Proyecto</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Section -->
                <section class="colaborar portfolio-section">
                    <h2>¿Interesado en colaborar?</h2>
                    <p>Estoy abierto a nuevas oportunidades y proyectos emocionantes.</p>
                    <a href="mailto:jose@ejemplo.com" class="btn">
                        <i class="fas fa-envelope"></i> Contactar
                    </a>
                </section>
        </div>
        </article>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="/assets/js/header.js"></script>
</body>
</html>