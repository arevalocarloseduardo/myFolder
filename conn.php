<?php

$conn = new mysqli("localhost","root","","userlogin");

if ($conn){
 echo "OK";
}else{
    echo "Fallo en la conexión.";
}    
?>