<?php 

$server = "localhost";
$user = "root";
$password="1234";
$dbname="Registro";
try {
    $con = new mysqli($server,$user,$password,$dbname);
     
    if ($con->connect_error) {
         echo("error de connection".$con->connect_error);  
    }
} catch (\Throwable $th) {
   echo("Connection con successfully");
}

?>