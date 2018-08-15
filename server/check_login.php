<?php
  session_start();
  require('conector.php');

  $username = $_POST['username'];
  $password = $_POST['password'];

  $con = new ConectorBD('localhost', 'diego', '1234');
  $con->initConexion('eval_final');
  $response["conexion"] = $con->getConexion();
//  $response["msg"] = '';
  if(  $con->initConexion('eval_final') == "OK"){


  // $usuario_consulta = $con->consultar(['usuarios'],['Email','Contrasena'],
   //"WHERE Email='$username'"." AND  Contrasena='$password'");

    $usuario_consulta = $con->consultar(['usuarios'], ['Email','ID_Usuario'],
    "WHERE Email='$username';");

    $contrasena_consulta = $con->consultar(['usuarios'],['Contrasena'],
    "WHERE Email='$username';");
    //fetchassoc te dará un arreglo asociativo, porque la consulta regresa un objeto sql
    $converted_contrasena = $contrasena_consulta->fetch_assoc();
    $converted_contrasena = $converted_contrasena['Contrasena'];

    $id_usuario = $usuario_consulta->fetch_assoc()['ID_Usuario'];

     if($usuario_consulta->num_rows != 0){
       if(password_verify($password, $converted_contrasena)){
         $_SESSION['username'] = $username;
         $_SESSION['id_usuario'] = $id_usuario;
         $response["msg"] = 'OK';
       }
       else{
         $response["msg"] = 'Contraseña incorrecta';
       }


     }
     else{
       $response["msg"] = "Usuario no existe";
     }
   }


  echo json_encode($response);
  $con->cerrarConexion();





 ?>
