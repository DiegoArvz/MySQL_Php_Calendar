<?php
  session_start();
  require('conector.php');
  $response['msg'] = '';

  if(isset($_SESSION['username'])){

    $con = new ConectorBD('localhost', 'diego', '1234');
    if($con->initConexion('eval_final') == 'OK'){

      $datos["FechaInicio"] = $_POST['start_date'];
      $datos["FechaFinalizacion"] = $_POST['end_date'];
      $datos["HoraInicio"] = $_POST['start_hour'];
      $datos["HoraFinalizacion"] = $_POST['end_hour'];

      $tabla = 'evento';
      $condicion = "ID=".$_POST['end_hour'];
      $sql = 'UPDATE '.$tabla.' SET ';
      $i=1;
      foreach ($datos as $key => $value) {
        $sql .= $key.'='.'"'.$value.'"';
        if ($i<sizeof($datos)) {
          $sql .= ', ';
        }else $sql .= ' WHERE '.$condicion.';';
        $i++;
      }

      $response['sql'] =$sql;


      if($con->actualizarRegistro('evento', $datos, "ID=".$_POST['id'])){
        $response['msg'] = 'OK';
      }
      else{
        $response['msg'] = 'evento no actualizado';
      }
    }



  }


  echo json_encode($response);
  $con->cerrarConexion();

 ?>
