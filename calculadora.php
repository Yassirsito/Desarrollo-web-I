<html>
<head>
    <title>Ejemplo</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="post" action="calculadora_resultado.php">
        Ingrese el primer numero:
        <input type="text" name="numero1" id="numero1">
        <br><br>
        Ingrese el segundo numero:
        <input type="text" name="numero2" id="numero2">
        <br><br>

        Seleccione la operacion:
        <select name="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
        </select>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>