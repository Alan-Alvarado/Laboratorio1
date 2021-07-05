<?php

include ("./clase/classtriangulo.php"); 
$triangulo = new Triangulo(); 
print_r($triangulo->tabla()); 
?> 

<table style="margin: 0 auto">
    <tr><h3 style="text-align: center; color: black"> EL AREA DEL TRIEANGULO ES: </h3> </tr>
    <tr><td style="text-align: center"> <?php echo "".$triangulo->area($_POST['altura'], $_POST['base']);?></td></tr>
</table>
<br>
<table style="margin: 0 auto">
 <tr><h3 style="text-align: center; color: black"> EL PERIMETRO DEL TRIEANGULO ES: </h3> </tr>
<tr><td style="text-align: center"> <?php echo "".$triangulo->perimetro($_POST['altura'], $_POST['base']);?></td></tr>
</table>