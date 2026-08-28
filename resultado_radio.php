<html>
<head>
    <title>Ejemplo</title>
</head>
<body>
    <h1>Resultado</h1>
    // Obtener el valor del radio ingresado en el formulario

<?php
    $radio = $_POST['radio']; // Calcular el area de la circunferencia usando la fórmula A = π * r^2

    $area = 3.1416 * $radio * $radio; 
    $area_redondeada = round($area, 2); // Redondear el resultado a 2 decimales

    echo "El radio ingresado es: ".$radio."<br>"; 
    echo "El area de la circunferencia es: ".$area_redondeada;
?>

</body>
</html>
