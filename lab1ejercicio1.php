<?php

 // Se define la función sumNumbers con el operador "spread" para aceptar una cantidad variable de argumentos
 function sumNumbers(...$numbers) {
    // Se inicializa una variable llamada $sum con el valor de 0
    $sum = 0; 
    // Se utiliza un ciclo foreach para iterar sobre cada uno de los argumentos
    foreach ($numbers as $number) { 
        // Se va sumando cada número al valor de $sum
        $sum += $number; 
    }
    // Se retorna el resultado de la suma
    return $sum; 
}
// Se llama a la función sumNumbers con cuatro argumentos y se muestra el resultado en pantalla
echo sumNumbers(1, 2, 3, 4); 