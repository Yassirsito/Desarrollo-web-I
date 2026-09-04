<html>
<head>
    <title>Pagina 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$nombre = $_REQUEST['nombre']; // Obtener el valor del campo "nombre" del formulario
echo "El nombre es: ".$nombre."<br>"; // Mostrar el nombre ingresado
$edad = $_POST['edad']; // Obtener el valor del campo "edad" del formulario

if (isset($edad) and $edad > 18) { // Verificar si la edad es mayor a 18
   echo "Usted puede votar en las proximas elecciones 2028"; 
}
else echo "Usted no es mayor de edad, por lo tanto no puede votar en las proximas elecciones 2028";
?>
</body>
</html>