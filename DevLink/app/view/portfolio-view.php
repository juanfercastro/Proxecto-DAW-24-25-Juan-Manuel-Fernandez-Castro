<?php
if (!isset($_SESSION['nombre'])) {
    header("Location: ?controller=UserController&action=loginForm");
    exit;
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
    <h1>Hola <?= $_SESSION['nombre'] ?> </h1>
    <a href="?controller=ForoController&action=showForo">Ir al foro</a>
</body>
</html>