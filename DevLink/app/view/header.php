
<!-- DevLink Header Component -->
<header>
      <a href="/index.html" class="logo">
        <img src="/assets/img/icon.png" alt="enlace de vuelta al inicio" class="logo">
      </a>
    
    <div class="mobile-menu">
      <a href="?controller=UserController&action=cerrarSesion">
        <i class="fa-solid fa-right-from-bracket boton"></i>
      </a>
      <button class="hamburguesa">
        <i class="fas fa-bars"></i>
      </button>
    </div>


    <h1 class="header-title">DevLink</h1>
    
    <nav class="nav-menu">
      <ul>
        <li class="nav-item"><a href="?controller=UserController&action=showPortfolio">Portfolio</a></li>
        <li class="nav-item"><a href="?controller=ForoController&action=showForo">Foro</a></li>
        <li class="nav-item"><a href="?controller=UserController&action=showOfertas">Ofertas</a></li>
        <?php if(isset($_SESSION['id'])){ ?>
          <li><a href="?controller=UserController&action=logout" class="boton">Cerrar Sesion <i class="fa-solid fa-right-from-bracket"></i></a></li>
        <?php }else{ ?>
          <li><a href="app/index.php?controller=UserController&action=loginForm" class="boton"><i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesion</a></li>
        <?php } ?>
      </ul>
    </nav>
</header>