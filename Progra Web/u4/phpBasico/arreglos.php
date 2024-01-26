<?PHP
    echo "<h1>Arreglos en PHP</h1>";
    $miArray = array(34,12,45,9,56,89,48);
    $h1 = 'El arreglo: $miArray= aarray(34,12,45,9,56,89,48);';
    echo $h1 . "<br>";
    $m1 = 'ordenandole de menor a mayor con : sort($miArray);';
    sort($miArray);
    echo $m1 . "<br>";
    foreach($miArray as $n){
        echo $n . ", ";
    }
    $m2 = 'Ordenandole de mayor a menor con: rsort($miArray);';
    rsort($miArray);
    echo "<br>" . $m2 . "<br>";
    foreach($miArray as $n){
        echo $n . ", ";
    }
    echo "<br>" . "Longitud del arreglo = " . count($miArray);
    echo "<br>" . "<h4>Para buscar un elemento dentro del array</h4>" . "<p>Utilizaremos array_search(elementoABuscar, arreglo)</p>";
    if(array_search(57, $miArray)){
        echo 'El numero 57 se encuentra dentro del arreglo <br>';
    } else {
        echo 'El numero 57 NO se encuentra dentro del arreglo <br>';
    }
    echo "<br>" . "<h4> Para introducir un nuevo elemento dentro del array</h4>" . "<p>Utilizaremos array_push(arrreglo, elementoNuevo)</p>";
    array_push($miArray, 57);
    echo "<p>Ahora si, el elemento 57 se encontrará dentro del arreglo</p>";
    foreach($miArray as $n){
        echo $n . ", ";
    }
?>