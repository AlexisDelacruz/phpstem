

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVALUACIÓN 3</title>
    <!-- Ruta relativa para el CSS -->
    <link rel="stylesheet" href="css\ProblemaStem.css">
    <!-- Fuente Comfortaa desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <?php function calcula(){
                // Variables iniciales
$v = 2; // Velocidad en Mach
$c = 1; // Velocidad del sonido
$resultado = "";

// Cálculo del número de Mach
$M = $v / $c;

// Cálculo del ángulo en radianes y conversión a grados
$thetaRad = asin(1 / $M);
$thetaDeg = $thetaRad * (180 / pi());

    // Preparar el resultado para mostrar
    $resultado = "Ángulo de onda de choque: " . round($thetaDeg, 2) . "°";
    return $resultado;
                
            }

                ?>
            <!-- Descripción del problema -->

            <section class="problema">
                <h2>Problema: En la prueba de un nuevo prototipo de armadura supersónica, Tony Stark (Ironman) está volando a Mach 2 a una altitud de 5000 m.</h2>
                <p>Descripción:</p>
                <p>a. ¿Cuál es el ángulo de la onda de choque que forma con la trayectoria de Ironman?</p>
            </section>
            <!-- Esquema del problema -->
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <!-- Imagen del esquema -->
                    <img class="imgProblema" src="images/esquema.png" alt="Esquema del problema">
                </center>
            </section>
            <!-- Fórmulas utilizadas -->
            <section class="formulas">
                <h2>Fórmulas</h2>
                <p>1. Número de Mach:</p>
                <p> M = v/c </p>
                <p>2. Relación con el ángulo:</p>
                <p>sin θ = 1/M</p>
                <p>Despejar el ángulo:</p>
                <p>θ = sin^-1(1/M)</p>
            </section>
            <!-- Datos del problema -->
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>c = 1</li>
                    <li>v = 2</li>
                </ul>
            </section>
            <!-- Solución -->
            <section class="calculos">
                <h2>Solución</h2>
                <p>1. Número de Mach:</p>
                <p> M = 2/1 </p>
                <p>2. Relación con el ángulo:</p>
                <p>sin θ = 1/2=0.5</p>
                <p>Despejar el ángulo:</p>
                <p>θ = sin^-1(0.5)</p>
            </section>
            <!-- Resultado -->
            <section class="resultado">
               
                <?php print "<h1>resultado " .calcula(). " </h1>" ; ?>
                
            
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>
