<?php

include ("./clase/classtriangulo.php"); 
$triangulo = new Triangulo(); 
print_r($triangulo->get_formulario()); 
?> 
<table style="text-align: center; margin: 0px auto; width: 600px" >
    <tr><h2 style="text-align: center; color: black">Resultado del Area del Triangulo </h2> </tr>
    <tr><td style="text-align: center"> <?php echo "".$triangulo->area($_POST['altura'], $_POST['base']);?></td></tr>
</table>
<br>
<table style="text-align: center; margin: 0px auto; width: 600px" >
 <tr><h2 style="text-align: center; color: black">Resultado del Perimetro del Triangulo</h2> </tr>
<tr><td style="text-align: center"> <?php echo "".$triangulo->perimetro($_POST['altura'], $_POST['base']);?></td></tr>
</table>