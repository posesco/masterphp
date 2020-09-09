<?php
$variables = 'Jesus Posada';
var_dump($variables);

echo date('d-m-y');
echo '<br>';
echo  time();
echo '<br>';
echo sqrt(10);
echo '<br>';
echo rand(10,20929);
echo '<br>';
echo pi();
echo '<br>';
echo round(7.6382342, 2);
echo '<br>';
echo gettype($variables);
echo '<br>';
if (is_string($variables)) {
    echo "Es una cadena";
}
echo '<br>';
echo trim("         dfdf  ");
echo '<br>';
?>