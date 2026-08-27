<html>
    <head> 
        <title>Ejemplo</title>
    </head>
    <body>
        <h1>Resultado</h1>

        <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];   
        $operacion = $_POST['operacion'];

        if ($operacion == "suma") {
            $resultado = $numero1 + $numero2;
            echo "El resultado de la suma es: ".$resultado;
        } elseif ($operacion == "resta") {
            $resultado = $numero1 - $numero2;
            echo "El resultado de la resta es: ".$resultado;
        } elseif ($operacion == "multiplicacion") {
            $resultado = $numero1 * $numero2;
            echo "El resultado de la multiplicación es: ".$resultado;
        }    
         echo "<br><br>";
 
    $resultado_redondeado = round($resultado, 2);
    echo "El resultado redondeado a 2 decimales es: ".$resultado_redondeado;
?>
 
</body>
</html>
