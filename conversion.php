<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Ejemplo</title>
</head>
<body>
    <h1>Resultado</h1>

<?php
    $pulgadas = $_POST['pulgadas']; // Calcular la conversión de pulgadas a centimetros usando la fórmula: 1 pulgada = 2.54 centimetros

    $centimetros = $pulgadas * 2.54;

    echo "Las pulgadas ingresadas son: ".$pulgadas."<br>";
    echo "El resultado en centimetros es: ".$centimetros."<br><br>";
?>

</body>
</html>