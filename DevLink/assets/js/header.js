const $d = document,
    $hamburguesa = $d.querySelector(".hamburguesa"),
    $link = $d.querySelectorAll(".nav-item"),
    $menu = $d.querySelector(".nav-menu")

function abrirMenu(){
    $menu.classList.toggle('abrir');
}

$hamburguesa.addEventListener('click',abrirMenu);