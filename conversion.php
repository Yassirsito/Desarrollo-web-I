<html>
<head>
    <title>Ejemplo</title>
</head>
<body>
    <h1>Resultado</h1>

<?php
    $pulgadas = $_POST['pulgadas'];

    $centimetros = $pulgadas * 2.54;

    echo "Las pulgadas ingresadas son: ".$pulgadas."<br>";
    echo "El resultado en centimetros es: ".$centimetros;
?>

</body>
</html>