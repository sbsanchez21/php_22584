<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // tipos de variables
        $entero=2002; 	//Entero Números sin decimales
        $real=3.14159; 	//Real Números con o sin decimal
        $mensaje="Feliz año 2021! $entero"; //comilla doble toma el valor de la variable
        echo $mensaje;
        echo "<br>";
        echo 'feliz año $entero';  //comilla simple no toma el valor de la variable
        $verdadero = true;
    
        // tipado dinámico
        $edad = 3;
        echo "<br>";
        echo $edad;
        echo "<br>";
        $edad = "tres";
        echo $edad;

        // variables por referencia
        echo "<br>";
        $nombre = 'Eduardo'; // Asigna el valor 'Eduardo' a $foo 
        $referenciaNombre = &$nombre; // Referencia
        $referenciaNombre = "Ramon"; // Modifica el valor de $nombre
        echo $nombre; // 
        echo "<br>";
        echo $referenciaNombre; 

        // cambiar el tipo de variable forzado 
        $cadena = "333";
        settype($cadena, "integer");
        echo "<br>";
        echo $cadena;

        // cambiar el tipo de variable casting
        $edad = 45;
        $edadCadena = (string) $edad;
        echo "<br>";
        echo $edad." - ".$edadCadena;

        //concatenación
        echo "<br>";
        echo "Hola mundo ".$edad;

        // ambito de variables
        $variableGlobal = "pepe"; 
        $variableGlobal2 = "juan";
        var_dump($GLOBALS["variableGlobal"]);
        function mifuncion(){ 
            $variableLocal = "Roxana";
            
            echo "<br>"; 
            echo $variableLocal;
            echo "<br>"; 
            // echo $variableGlobal1;
            //estoy dentro de la función, para aceder a las variables utilizo $GLOBALS 
            echo $GLOBALS["variableGlobal"]; 
            echo "<br>"; 
            echo $GLOBALS["variableGlobal2"]; 
        }

        mifuncion();

        // variables del sistema
        echo "<br>"; 
        //phpinfo();
        // navegador y versión
        echo $_SERVER["HTTP_USER_AGENT"];
        echo "<br>"; 
        // ip del host
        echo $_SERVER["HTTP_HOST"];
        echo "<br>"; 
        // server web
        echo $_SERVER["SERVER_SOFTWARE"];
        echo "<br>"; 
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>"; 
        echo "<br>"; 
        // var_dump($GLOBALS);
        

        //arrays con índice numérico
        $meses = [
            "enero",
            "febrero",
            "marzo",
            "abril",
        ];

        //var_dump($meses);

        $long = count($meses);
        for ($i=0; $i < $long ; $i++) { 
            echo "<br>";
            echo $meses[$i];
        }
        echo "<br>";

        $sueldos=[
            50000,
            60000,
            70000,
            "dsdf"
        ];

        foreach ($sueldos as $suel) {
            echo "<br>";
            echo $suel;
            echo "<br>";
        }

        //array asociativos con clave valor, clave string
        $numeroMes = [
            "enero" => "1",
            "febrero" => "2",
            "marzo" => "3",
            "abril" => "4",
        ];
        var_dump($numeroMes);
        echo "<br>";
        echo $numeroMes["enero"];
        echo "<br>";
        echo $numeroMes["abril"];

        // matrices o arrays multidimensionales
        $pais=[
            "argentina" => [
                "nombre"=>"República Argentina",
                "lengua"=>"Castellano",
                "moneda"=>"Pesos"
                ],
            "francia" => [
                "nombre"=>"Francia",
                "lengua"=>"Francés",
                "moneda"=>"Euro"
            ]
        ];
        echo "<br>";
        echo $pais["argentina"]["moneda"];
        echo $pais["argentina"]["lengua"];
        echo "<br>";
        echo $pais["francia"]["lengua"];

        //funciones de array
        $monedas = [
            "argentina" => "pesos",
            "francia" => "euro",
            "japón" => "yen"
        ];
        asort($monedas);
        echo "<br>";
        echo "funciones de arrays";
        echo "<br>";
        var_dump($monedas);
        
        ksort($monedas);
        echo "<br>";
        var_dump($monedas);

        echo "<br>";
        echo count($monedas);

        // cadenas
        $nombre = "Juan";
        echo "<br>";
        echo $nombre;
        //comillas dobles
        $apellidoYNombre =  "Suarez $nombre";
        echo "<br>";
        echo $apellidoYNombre;
        //comillas simples
        $apellido = 'Suarez $nombre';
        echo "<br>";
        echo $apellido;
        //concatenación
        echo "<br>";
        echo $apellido." ".$nombre;

        

    ?>

</body>
</html>