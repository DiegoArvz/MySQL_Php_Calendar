<?php
require('conector.php');


$con = new ConectorBD('localhost', 'diego', '1234');
$con->initConexion('eval_final');


  $username = "marco@nextu.com";
  $password = "holabola";
  $contrasena_consulta = $con->consultar(['usuarios'],['Contrasena'],
  "WHERE Email='$username';");
  $converted_contrasena = $contrasena_consulta->fetch_assoc();
  $converted_contrasena = $converted_contrasena['Contrasena'];

  $resultado_consulta = $con->consultar(['usuarios'],['Email','Contrasena'],
  "WHERE Email='$username';");

  if($resultado_consulta->num_rows != 0){

   if(password_verify($password, $converted_contrasena)){
      $response["msg"] = 'OK';
      echo $response["msg"];
    }else{

      echo $password.' '.$converted_contrasena;
    }
  }
  else{
    echo "Error";
  }


 ?>
