const $d = document,
    $hamburguesa = $d.querySelector(".hamburguesa"),
    $link = $d.querySelectorAll(".nav-item"),
    $menu = $d.querySelector(".nav-menu"),
    $icono = $hamburguesa.querySelector("i")

function abrirMenu(){
    $menu.classList.toggle('abrir');
    if($icono.classList.contains("fa-bars")){
        $icono.classList.remove("fas","fa-bars");
        $icono.classList.add("fa-xmark", "fa-solid");
    }else{
        $icono.classList.remove("fa-xmark", "fa-solid");
        $icono.classList.add("fas","fa-bars");
    }
}

$hamburguesa.addEventListener('click',abrirMenu);