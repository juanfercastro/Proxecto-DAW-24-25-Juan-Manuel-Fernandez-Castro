
<!-- DevLink Header Component -->
<header>
      <a href="/index.html" class="logo">
        <img src="/assets/img/icon.png" alt="enlace de vuelta al inicio" class="logo">
      </a>
    
    <div class="mobile-menu">
      <button class="hamburguesa">
        <i class="fas fa-bars"></i>
      </button>
      <a href="?controller=UserController&action=cerrarSesion">
        <i class="fa-solid fa-right-from-bracket boton"></i>
      </a>
    </div>


    <span class="header-title text-desktop">DevLink</span>
    
    <nav class="nav-menu">
      <ul>
        <li class="nav-item"><a href="?controller=UserController&action=showPortfolio">Portfolio</a></li>
        <li class="nav-item"><a href="?controller=ForoController&action=showForo">Foro</a></li>
        <li class="nav-item"><a href="?controller=UserController&action=showOfertas">Ofertas</a></li>
        <li><a href="?controller=UserController&action=logout" class="boton">Cerrar Sesion <i class="fa-solid fa-right-from-bracket"></i></a></li>
      </ul>
    </nav>
</header>