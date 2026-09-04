# Introducción al Lenguaje PHP – UTP

Repositorio con las prácticas y laboratorios realizados durante la unidad de **Introducción al Lenguaje de Programación PHP** (II Semestre, UTP).

## Tecnología utilizada

- **Lenguaje:** PHP
- **Servidor local:** WampServer (Apache + MySQL + PHP)
- **Editor:** Visual Studio Code

## Problemas y prácticas

A continuación se explica cada problema propuesto en la presentación de la unidad y su relación con los archivos del repositorio.

### Práctica #1 – Iniciación (Hello World)
Primer contacto con la sintaxis de PHP: imprimir un mensaje simple usando `echo` dentro de las etiquetas `<?php ?>`.
```php
<?php
echo 'Hello World!';
?>
```
**Archivo relacionado:** `practica_1.php`

### PHP Embebido
Ejercicio para combinar código HTML con bloques de PHP dentro del mismo archivo, entrando y saliendo de las etiquetas `<?php ?>` según se necesite.

**Archivo relacionado:** `Embebido.php`

### Operaciones matemáticas en PHP (#2)
Serie de ejercicios para practicar los operadores matemáticos básicos (`+`, `-`, `*`, `/`, `%`, `**`) y el orden de precedencia entre ellos.

**Archivos relacionados:** `Operaciones.php`, `ejemplo.php`, `ejemplo_2.php`, `ejemplo_5.php`

### Práctica 3 – Variables
Ejercicio sobre declaración de variables e interpolación de cadenas dentro de un `echo`, generando una página HTML dinámica.
```php
<?php
$author1 = "John Doe";
$author2 = "Max Mustermann";
echo "<h1>Hello World!</h1>
<p>This dynamic web page was created by $author1 and $author2.</p>";
?>
```
**Archivo relacionado:** `Variables.php`

### Laboratorio #1 – Conversión de pulgadas a centímetros
Programa que recibe un valor en pulgadas (por formulario) y lo convierte a centímetros.

> 1 pulgada = 2.54 centímetros

Pasos: leer las pulgadas ingresadas, multiplicar por 2.54 e imprimir el resultado.

**Archivos relacionados:** `conversion.php`, `pulgadas.php`, `pulgadas_resultado.php`, `formuario.php`

### Problema #2 – Calculadora
Script en PHP que implementa una calculadora con las operaciones de sumar, restar, multiplicar, y que además redondea decimales en el resultado.

**Archivos relacionados:** `calculadora.php`, `calculadora_resultado.php`

### Práctica adicional – Circunferencia
Cálculo de propiedades de una circunferencia (área y/o perímetro) a partir de un radio ingresado por el usuario.

**Archivo relacionado:** `circunferencia.php`

### Formularios y resultados con radio buttons
Ejercicio de formulario HTML que envía datos por `$_POST`/`$_GET`/`$_REQUEST` y muestra el resultado según la opción seleccionada.

**Archivo relacionado:** `resultado_radio.php`

## Conceptos cubiertos en la unidad

- Delimitadores de PHP (`<?php ?>`, embebido en HTML)
- Variables, tipos de datos y reglas de nomenclatura
- Casting implícito y explícito (`(int)`, `settype()`, `gettype()`, `var_dump()`)
- Constantes (`define()`) vs. variables
- Salida de datos (`echo`, `printf`)
- Operadores matemáticos y orden de precedencia
- Comentarios de una línea (`//`, `#`) y de bloque (`/* */`)
- Variables superglobales: `$_GET`, `$_POST`, `$_REQUEST`

## Autor

Moises – Estudiante de Licenciatura en Ciberseguridad, Universidad Tecnológica de Panamá (UTP)
