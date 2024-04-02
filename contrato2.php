<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$valor1=$_POST['texto1'];
$valor2=$_POST['texto2'];
$valor3=$_POST['texto3'];
$valor4=$_POST['texto4'];

echo "<p>En la ciudad de: $valor1 se celebra el contrato entre $valor2 y nuestra empresa, representada por $valor3 ubicada en la siguiente dirección: $valor4 . Se celebra el contrato a plazo fijo.</p>"; 
echo "<br>";
?>

<form action="">
    <input type="submit" value="Imprimir" onclick="window.print()">
</form>
</body>
</html>