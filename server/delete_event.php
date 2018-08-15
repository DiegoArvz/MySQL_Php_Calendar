<?php
session_start();
require('conector.php');

$response['msg'] = "";

if(isset($_SESSION['username'])){

  $con = new ConectorBD('localhost', 'diego', '1234');
  $con->initConexion('eval_final');

  $id = $_POST['id'];
  $tabla = 'evento';
  $condicion = ' ID='."'$id'";
  if( $con->initConexion('eval_final') == 'OK'){
    $response['sql'] = "DELETE FROM ".$tabla." WHERE ".$condicion.";";

    if( $con->eliminarRegistro($tabla, $condicion)){

      $response['msg']= 'OK';
    }
    else{
      $response['msg']= 'No se ha podido eliminar';
    }

  }
  else{
    $response['msg']= 'Error al intentar conectarse a la base de datos';
  }
}

echo json_encode($response);
$con->cerrarConexion();


 ?>
