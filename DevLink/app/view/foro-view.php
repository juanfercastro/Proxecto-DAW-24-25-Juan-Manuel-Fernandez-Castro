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
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al foro</h1>
    <?php
        if(!empty($data['propias'])){
            echo "<ul>";
            foreach ($data['propias'] as $entrada) {
                $hora = $entrada->getFecha()->format('H:i');
                echo "<li>Titulo: ". htmlspecialchars($entrada->getTitulo()).", hora de insercion: $hora</li>";
            }
            echo "</ul>";
        }else{
            echo "non hai";
        }

        if(!empty($data['otras'])){
            echo "<ul>";
            foreach ($data['otras'] as $entrada) {
                $hora = $entrada->getFecha()->format('H:i');
                echo "<li>Titulo: ". htmlspecialchars($entrada->getTitulo()).", hora de insercion: $hora</li>";
            }
            echo "</ul>";
        }else{
            echo "non hai";
        }
    ?>

    <form action="?controller=ForoController&action=addEntrada" method="post">
        <input type="hidden" name="id_creador" id="id_creador" value="<?= $id_usuario ?>">
        <label for="titulo">Titulo de la entrada</label><br>
        <input type="text" name="titulo" id="titulo"><br>
        <label for="contenido">Contenido de la entrada</label><br>
        <textarea name="contenido" id="contenidop" placeholder="Necesito ayuda con..."></textarea><br>
        <button type="submit">Crear Entrada</button>
    </form>
</body>
</html>