<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<h1>SU NOMBRE Y ESTUDIOS SON</h1>

<?php
$nombre=$_POST['nombre'];
$radio1=$_POST['radio1'];

echo "<p>Su nombre es: $nombre</p>"; 
echo "<br>";
echo "<br>";
echo "<p>Tipo de estudios: $radio1</p>";


?>
</body>
</html>