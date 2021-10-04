<?php 
require "Conexion/conexion.php";
$correcto="";
$vacio = "";
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$numero=$_POST["numero"];
$mensaje=$_POST["massage"];
$correoErr="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    

if(isset($_POST["enviar"])){
    
  if(!empty($nombre) && !empty($email) && !empty($numero) && !empty($mensaje)){
    $nombre = test_input($nombre);
       
    $email = test_input($email);
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE) {
      $numero = test_input($numero);
       $mensaje = test_input($mensaje);  
        if (!preg_match("/^[a-zA-Z- ']*$/" ,$nombre)) {
            $nameErr ="Solo se permiten letras y espacios";
             if(strlen($nombre)>=40 && strlen($nombre)<=1){
                 $nombreErr = "Nombre no Valido";
             } 
        }else{
    $sql = "INSERT into Tienda (id,nombre,email,telefono,mensaje) values (null,
    '$nombre','$email','$numero','$mensaje')";

   $result=$con->query($sql);
    
    if($result==TRUE){
         $correcto = "Mensaje Enviado";    
    }else{
        echo "datos incorrecto".$sql.$con->error;
    }
        }
        
    }else{
        $correoErr = "El Correo Electronico debe tener una dirección email valida  ";
    }
}else{
  
    $vacio = "LLene los campos";
  
  }    

}

}
function test_input($data){
    $data= trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
    


?>