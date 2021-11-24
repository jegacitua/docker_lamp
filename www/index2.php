<?php

echo "<h1>count()</h1>";

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;

echo "Respuesta: ";
var_dump(count($a));

?>





<?php

echo "<h1>array()</h1>";



echo "Respuesta: ";


?>





<?php

echo "<h1>in_array()</h1>";

$os = array("Mac", "NT", "Irix", "Linux");

echo "Respuesta: ";
if (in_array("Irix", $os)) {
    echo "Existe Irix";
}
if (in_array("mac", $os)) {
    echo "Existe mac";
}




?>