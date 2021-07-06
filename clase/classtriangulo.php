<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Area y Perimetro de un Triangulo</title>
    </head>
    <body style="background-color:#B0ADAC;">
        
        <?php
        
    class Triangulo{
    private $altura; // atributos
    private $base;
    
    function CTriangulo(){
        // es la funcion del constructor 
        $this->altura= 0; // atributos
        $this->base = 0;  
    }
    public function get_formulario(){
        $html = '
            <br>
                <form name= "for" action="" method="POST" text_aling= "center"> 
                <br>
                <h2 style="text-align: center">Area y Perimetro de un Triangulo</h2></td>
              
                 <br>
                 <table  style = " text-align: center; margin: 0px auto; width: 570px " border="1">
                 <tr>
                        <td style="text-align: center ; width: 50% ">Ingrese el valor de altura del triangulo</td>
                        <td style="text-align: center  "><input type="text" name="altura" size=5></td>
                 </tr>
                 <tr>
                        <td  style="text-align: center ; width: 50% ">Ingrese la base de altura del triangulo</td>
                        <td style="text-align: center  "><input type="text" name="base" size=5></td>
                </tr>
                <tr aling = "center">
                        <td aling = "center" colspan= "2" ><center><input type="submit" name="guardar" value="Resolver"></center></td>
                 </tr>
            </table> 
                </form>';
        return $html;
    }
    
    public function area($altura,$base){ // metodos area
        $area = $altura * $base / 2;
        return $area;
    }
    public function perimetro($altura,$base){ // método perimetro 
        $perimetro = ($base + $altura)*2;
        return $perimetro;
    }   
    
}
 ?>
    </body>
</html>