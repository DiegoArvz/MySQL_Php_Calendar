<?php

  session_start();

  require('conector.php');

  if(isset($_SESSION['username'])){
    $con = new ConectorBD('localhost', 'diego', '1234');
    $con->initConexion('eval_final');

    $id_usuario = $_SESSION['id_usuario'];

    $response['msg'] = "";
    $tabla_eventos = 'evento';




    $atributos["Titulo"] = $_POST['titulo'];
    $atributos["FechaInicio"] = $_POST['start_date'];
    if( $_POST['allDay'] == 1){
      $atributos["DiaCompleto"] =  'true';
    }
    else{
      $atributos["DiaCompleto"] =  'false';
      $atributos['HoraInicio'] = $_POST['start_hour'];
			$atributos['FechaFinalizacion'] = $_POST['end_date'];
			$atributos['HoraFinalizacion'] = $_POST['end_hour'];
    }

    $atributos["ID_Usuario"] = "$id_usuario";

    if(  $con->initConexion('eval_final') == 'OK'){

      if($con->insertData('evento', $atributos)){
        $response['msg'] = 'OK';
      }
      else{
        $response['msg'] = 'Error al guardar el evento';
      }
    }
  }


  echo json_encode($response);
  $con->cerrarConexion();

 ?>
