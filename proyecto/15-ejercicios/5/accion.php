<?php

$accion = array (
    'GTA',
    'COD',
    'PUGB'
);
echo '<th>ACCION</th>';
foreach ($accion as $key) {
    echo "<tr><td>$key</td></tr>";    
}
?>