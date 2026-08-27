<html>
<head>
    <title>Ejemplo</title>
</head>
<body>
    <h1>Resultado</h1>

<?php
    $radio = $_POST['radio'];

    $area = 3.1416 * $radio * $radio;

    $area_redondeada = round($area, 2);

    echo "El radio ingresado es: ".$radio."<br>";
    echo "El area de la circunferencia es: ".$area_redondeada;
?>

</body>
</html>
