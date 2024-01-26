<?php
    echo '<h2>Arreglos bidimensionales';
    $tabla = array(
        'Fruta' => array('Manzana', 'Limon', 'Mango', 'Papaya'),
        'Color' => array('Rojo', 'Verde', 'Amarillo', 'Naranja'),
        'Figura' => array('Circulo', 'Rectangulo', 'Cilindro', 'Triangulo')
    );
?>
<table border="1">
    <tr>
        <th>Fruta</th>
        <th>Color</th>
        <th>Figura</th>
    </tr>
    <tr>
        <td><?=$tabla['Fruta'][0]?></td>
        <td><?=$tabla['Color'][0]?></td>
        <td><?=$tabla['Figura'][0]?></td>
    </tr>
    <tr>
        <td><?=$tabla['Fruta'][1]?></td>
        <td><?=$tabla['Color'][1]?></td>
        <td><?=$tabla['Figura'][1]?></td>
    </tr>
    <tr>
        <td><?=$tabla['Fruta'][2]?></td>
        <td><?=$tabla['Color'][2]?></td>
        <td><?=$tabla['Figura'][2]?></td>
    </tr>
    <tr>
        <td><?=$tabla['Fruta'][3]?></td>
        <td><?=$tabla['Color'][3]?></td>
        <td><?=$tabla['Figura'][3]?></td>
    </tr>
</table>