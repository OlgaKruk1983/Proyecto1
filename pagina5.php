<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SU COMENTARIO SOBRE NOSOTROS</h1>

    <?php
    echo "nombre del usuario" . $_REQUEST['nombre'];
    echo "<br>";
    echo "su comentario es: " . $_REQUEST['comentario'];
    
    
    
    ?>
</body>
</html>