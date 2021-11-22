<?php
if(isset($_POST['enviar'])){
    if(empty($cedula)){
        echo"<p class='error'>Agrega tu cedula</p>";
       }else{
           if(!is_numeric($cedula)){
            echo"<p class='error'>La cedula debe ser un nuemro</p>";
           }
           if(is_numeric($cedula)>11){
            echo"<p class='error'>Demaciados digitos para ser una cedula</p>";
           }
           if(is_numeric($cedula)<11){
            echo"<p class='error'>pocos digitos para ser una cedula</p>";
           }
           else{
            echo"datos guardados";
           }


       }
       if(empty($telefono)){
           echo"<p class='error'>Agrega tu numero</p>";
        }
        else{
            if(!is_numeric($telefono)){
                echo"<p class='error'>El telefono debe tener varios numeros</p>";
            }
               if(is_numeric($telefono)>10){
                echo"<p class='error'>Demaciados digitos para ser un telefono</p>";
            }
            if(is_numeric($telefono)>10){
                echo"<p class='error'>Pocos digitos para ser un telefono</p>";
               }
               else{
                echo"datos guardados";
               }




        }
        
            
}


?>