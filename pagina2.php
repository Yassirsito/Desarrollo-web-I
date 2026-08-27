<?php

$nombre = $_REQUEST['nombre'];
echo "El nombre es: ".$nombre."<br>";
$edad = $_POST['edad'];

if (isset($edad) and $edad > 18) {
   echo "Usted puede votar en las proximas elecciones 2028";
}
else echo "Usted no es mayor de edad, por lo tanto no puede votar en las proximas elecciones 2028";
?>