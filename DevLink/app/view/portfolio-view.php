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
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/general.css">
</head>
<body>
    <?php include_once("header.php"); ?>
    <main>
        <h1>Hola <?= $_SESSION['nombre'] ?> </h1>
        <a href="?controller=ForoController&action=showForo">Ir al foro</a>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="/assets/js/header.js"></script>
</body>
</html>